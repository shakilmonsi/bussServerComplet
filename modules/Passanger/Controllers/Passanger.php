<?php

namespace Modules\Passanger\Controllers;

use App\Controllers\BaseController;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use CodeIgniter\API\ResponseTrait;

use App\Libraries\Rolepermission;

class Passanger extends BaseController
{

    protected $Viewpath;
    protected $userModel;
    protected $userDetailModel;
    protected $roleModel;
    protected $db;

    use ResponseTrait;


    public function __construct()
    {

        $this->Viewpath = "Modules\Passanger\Views";
        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();
        $this->roleModel = new RoleModel();
        $this->db = \Config\Database::connect();
    }


    public function new()
    {
        $builder = $this->db->table('country');
        $query   = $builder->get();
        $data['country'] = $query->getResult();


        $data['module'] =    lang("Localize.passanger");
        $data['title']  =    lang("Localize.add_passanger");

        $data['pageheading'] = lang("Localize.add_passanger");

        echo view($this->Viewpath . '\passanger/new', $data);
    }

    public function index(bool $showTrashOnly = false)
    {
        // build layout data
        $data['module'] = lang("Localize.passanger");
        $data['title']  = lang("Localize.passanger_list");
        $data['pageheading'] = lang("Localize.passanger_list");

        // build role permissions
        $rolepermissionLibrary = new Rolepermission();
        $data['add_data'] = $rolepermissionLibrary->create("add_passanger");
        $data['edit_data'] = $rolepermissionLibrary->edit("passanger_list");
        $data['delete_data'] = $rolepermissionLibrary->delete("add_passanger");

        // get country list
        $data['country'] = $this->db->table('country')->get()->getResult();

        // build user list
        $this->userModel
            ->select('users.id as user_id, users.*, user_details.*')
            ->join('user_details', 'user_details.user_id = users.id', 'left')
            ->where('role_id', 3)
            ->orderBy('users.id', 'DESC');

        if ($showTrashOnly) {
            $data['trash_view'] = true;
            $this->userModel->onlyDeleted();
        }

        $data['userDetail'] = $this->userModel->findAll();
        //dd($data['userDetail']);
        return view($this->Viewpath . '\passanger\index', $data);
    }

    public function create()
    {
        // Build new user model data
        $login_email = $this->request->getVar('login_email');
        $login_mobile =  $this->request->getVar('login_mobile');
        $password = $this->request->getVar('password');
        $confirm = $this->request->getVar('confirm_password');

        $userData = array(
            "login_email" => $login_email,
            "login_mobile" => $login_mobile,
            "password" => $password,
            "confirm" => $confirm,
            "slug" => bin2hex(random_bytes(5)),
            "role_id" => 3,
            "status" => 1
        );

        if ($this->validation->run($userData, 'user')) {
            $this->db->transStart();

            // build hashed passowrd
            // and insert to user model
            $userData['password'] = password_hash($password, PASSWORD_BCRYPT);
            $userId = $this->userModel->insert($userData);

            // build user detail model data
            $userDetailData = array(
                "user_id" => $userId,
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "country_id" => $this->request->getVar('country_id'),
                "address" => $this->request->getVar('address'),
                "city" => $this->request->getVar('city'),
                "zip_code" => $this->request->getVar('zip_code'),
            );

            // use id type and id number
            ($idType = $this->request->getVar('id_type')) && $userDetailData['id_type'] = $idType;
            ($idNumber = $this->request->getVar('id_number')) && $userDetailData['id_number'] = $idNumber;

            if ($this->validation->run($userDetailData, 'userDetail')) {
                // user detail data is valid
                // insert data to user details model
                $this->userDetailModel->insert($userDetailData);

                $this->db->transComplete();
                return redirect()->route('index-passanger')->with("success", "Data Save");
            }
        }

        // data is invlaid 
        // rollback database query
        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function edit($id)
    {
        $builder = $this->db->table('country');
        $query   = $builder->get();
        $data['country'] = $query->getResult();
        $data['passanger'] = $this->userDetailModel->find($id);

        $data['module'] =    lang("Localize.passanger");
        $data['title']  =    lang("Localize.passanger_list");

        $heading = lang("Localize.passanger") . ' ' . lang("Localize.edit");
        $data['pageheading'] = $heading;

        return view($this->Viewpath . '\passanger/edit', $data);
    }

    public function update($id)
    {
        $userDetailsData = array(
            "id" => $id,
            "user_id" => $this->request->getVar('user_id'),
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'),
            "country_id" => $this->request->getVar('country_id'),
            "id_type" => $this->request->getVar('id_type') ?: null,
            "id_number" => $this->request->getVar('id_number') ?: null,
            "address" => $this->request->getVar('address'),
            "city" => $this->request->getVar('city'),
            "zip_code" => $this->request->getVar('zip_code'),
        );

        if ($this->validation->run($userDetailsData, 'userDetail')) {
            $this->userDetailModel->save($userDetailsData);
            return redirect()->route('index-passanger')->with("success", "Data Save");
        }

        return redirect()->back()->with('fail', $this->validation->listErrors());
    }

    public function delete($id)
    {
        $passangerInfo = $this->userDetailModel->find($id);
        $passangerUserId = $passangerInfo->user_id;
        $passangerLastName = $passangerInfo->last_name;

        try {
            $this->db->transStart();
            $this->userDetailModel->delete($id);
            $this->userModel->delete($passangerUserId);
            $this->db->transComplete();
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        return redirect()->back()->with('fail', "Passanger: {$passangerLastName} deleted");
    }

    public function restore($id)
    {
        $passangerInfo = $this->userDetailModel->withDeleted()->find($id);
        $passangerUserId = $passangerInfo->user_id;
        $passangerLastName = $passangerInfo->last_name;

        try {
            $this->db->transStart();
            $this->userDetailModel->set('deleted_at', null)->update($id);
            $this->userModel->set('deleted_at', null)->update($passangerUserId);
            $this->db->transComplete();
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        return redirect()->route('trash-index-passanger')->with('success', "Passanger: {$passangerLastName} restored");
    }
}
