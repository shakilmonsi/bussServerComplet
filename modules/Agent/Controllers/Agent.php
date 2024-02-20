<?php

namespace Modules\Agent\Controllers;

use App\Controllers\BaseController;
use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;
use Modules\Agent\Models\AgenttotalModel;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use Modules\Location\Models\LocationModel;
use App\Libraries\Rolepermission;

class Agent extends BaseController
{
    protected $Viewpath;
    protected $db;
    protected $userModel;
    protected $userDetailModel;
    protected $agentModel;
    protected $roleModel;
    protected $locationModel;
    protected $agentCommissionModel;
    protected $agentTotal;

    public function __construct()
    {
        $this->Viewpath = "Modules\Agent\Views";
        $this->agentModel = new AgentModel();
        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();
        $this->roleModel = new RoleModel();
        $this->locationModel = new LocationModel();
        $this->db = \Config\Database::connect();

        $this->agentCommissionModel = new Agentcommission();
        $this->agentTotal = new AgenttotalModel();
    }

    public function index(bool $showTrashOnly = false)
    {
        // build layout data
        $data['pageheading'] = lang("Localize.agent_list");
        $data['module'] = lang("Localize.agent");
        $data['title']  = lang("Localize.agent_list");

        // build perission dat
        $rolepermissionLibrary = new Rolepermission();
        $data['add_agent'] = $rolepermissionLibrary->create("add_agent");
        $data['edit_agent'] = $rolepermissionLibrary->edit("agent_list");
        $data['delete_agent'] = $rolepermissionLibrary->delete("agent_list");

        // list agents by role id
        $userRole = $this->session->get('role_id');

        if ($userRole != 2) {
            $this->userModel
                ->join('agents', 'agents.user_id = users.id', 'left')
                ->where('role_id', 2)
                ->orderBy('users.id', 'DESC');

            if ($showTrashOnly) {
                $data['trash_view'] = true;
                $this->userModel->onlyDeleted();
            }

            $data['agentdetail'] = $this->userModel->findAll();
            $data['role_id'] = $userRole;
        } else {
            $agentid = $this->session->get('user_id');
            $data['agentdetail'] = $this->userModel->join('agents', 'agents.user_id = users.id', 'left')->where('role_id', 2)->where('agents.user_id', $agentid)->findAll();
            $data['role_id'] = $userRole;
        }

        return view($this->Viewpath . '\agent\index', $data);
    }

    public function new()
    {
        // build layout data
        $data['pageheading'] = lang("Localize.add_agent");
        $data['module'] = lang("Localize.agent");
        $data['title']  = lang("Localize.add_agent");

        // build country and location list 
        $builder = $this->db->table('country');
        $query = $builder->get();
        $data['country'] = $query->getResult();
        $data['location'] = $this->locationModel->findAll();

        return view($this->Viewpath . '\agent/new', $data);
    }

    public function create()
    {
        // build additional table data
        $path = 'image/agent';
        $slug = bin2hex(random_bytes(5));
        $role_id = 2;
        $status = 1;

        // build agent login credintial
        $login_email = $this->request->getVar('login_email');
        $login_mobile = $this->request->getVar('login_mobile');

        // build agent password
        $password = $this->request->getVar('password');
        $confirmPassword = $this->request->getVar('confirm');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $userData = array(
            "login_email" => $login_email,
            "login_mobile" => $login_mobile,
            "password" => $password,
            "confirm" => $confirmPassword,
            "slug" => $slug,
            "role_id" => $role_id,
            "status" => $status,
        );

        if ($this->validation->run($userData, 'user')) {
            // user data is valid
            // starting database query transaction
            $this->db->transStart();

            // Insert to user table
            $userId = $this->userModel->insert(array_merge($userData, ['password' => $password_hash]));

            // agent table data operation 
            // build nid and document data
            $imagenid = $imagedocu =  '';

            $nidimage = $this->request->getFile('nid_picture');
            $profileimage = $this->request->getFile('profile_picture');

            if ($nidimage->isValid() && !$nidimage->hasMoved()) {
                // nid image exists
                $imagenid = $this->imgaeCheck($nidimage, $path);
            }

            if ($profileimage->isValid() && !$profileimage->hasMoved()) {
                // profile picture exists
                $imagedocu = $this->imgaeCheck($profileimage, $path);
            }

            // build agent table data
            $agentData = array(
                "user_id" => $userId,
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "country_id" => $this->request->getVar('country_id'),
                "address" => $this->request->getVar('address'),
                "city" => $this->request->getVar('city'),
                "zip" => $this->request->getVar('zip'),
                "location_id" => $this->request->getVar('location_id'),
                "blood" => $this->request->getVar('blood'),
                "commission" => $this->request->getVar('commission'),
                "profile_picture" => $imagedocu,
                "nid_picture" => $imagenid,
                "discount" => $this->request->getVar('discount'),
            );

            // use id type and id number
            ($idType = $this->request->getVar('id_type')) && $agentData['id_type'] = $idType;
            ($idNumber = $this->request->getVar('id_number')) && $agentData['id_number'] = $idNumber;

            if ($this->validation->run($agentData, 'agent')) {
                // insert data to agent model
                $this->agentModel->insert($agentData);

                // all data inserted successfully
                // completed database query transaction
                $this->db->transComplete();

                return redirect()->route('index-agent')->with("success", "Data Save");
            }
        }

        // invalid data posted
        // rollback query operation
        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function edit($id)
    {
        // build layout data
        $data['module'] = lang("Localize.agent");
        $data['title']  = lang("Localize.agent_list");
        $data['pageheading'] = lang("Localize.agent") . ' ' . lang("Localize.edit");

        // build country and location data
        $builder = $this->db->table('country');
        $query   = $builder->get();
        $data['country'] = $query->getResult();
        $data['location'] = $this->locationModel->findAll();

        // build agent details
        $data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users', 'users.id = agents.user_id')->where('users.role_id', 2)->where('agents.id', $id)->first();

        return view($this->Viewpath . '\agent/edit', $data);
    }

    public function update($userId, $agentId)
    {
        $path = 'image/agent';
        $imagenid = $imagedocu = '';
        $nidimage = $this->request->getFile('nid_picture');
        $profileimage = $this->request->getFile('profile_picture');

        $userId = $this->request->getVar('userId');
        $agentId = $this->request->getVar('agentId');

        // starting database transaction
        $this->db->transStart();

        if ($nidimage->isValid() && !$nidimage->hasMoved()) {
            // nid image exists
            $imagenid = $this->imgaeCheck($nidimage, $path);
        } else {
            // nid image not exists
            // switch back to old image
            $imagenid = $this->request->getVar('documentoldpic');
        }

        if ($profileimage->isValid() && !$profileimage->hasMoved()) {
            // profile picture exists
            $imagedocu = $this->imgaeCheck($profileimage, $path);
        } else {
            // profile picture not exists
            // switch back to old image
            $imagedocu = $this->request->getVar('profileoldpic');
        }

        // build user model data
        $userData = array(
            "id" => $this->request->getVar('userId'),
            "login_email" => $this->request->getVar('login_email'),
            "login_mobile" => $this->request->getVar('login_mobile'),
        );

        if ($this->validation->run($userData, 'user')) {
            // insert data to user model
            $this->userModel->save($userData);

            // build agent model data
            $agentData = array(
                "id" => $agentId,
                "user_id" => $userId,
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "country_id" => $this->request->getVar('country_id'),
                "id_type" => $this->request->getVar('id_type') ?: null,
                "id_number" => $this->request->getVar('id_number') ?: null,
                "address" => $this->request->getVar('address'),
                "city" => $this->request->getVar('city'),
                "zip" => $this->request->getVar('zip'),
                "location_id" => $this->request->getVar('location_id'),
                "blood" => $this->request->getVar('blood'),
                "commission" => $this->request->getVar('commission'),
                "profile_picture" => $imagedocu,
                "nid_picture" => $imagenid,
                "discount" => $this->request->getVar('discount')
            );

            if ($this->validation->run($agentData, 'agent')) {
                // agent data is valid
                // update agent data
                $this->agentModel->save($agentData);

                // completed database query transaction
                $this->db->transComplete();
                return redirect()->route('index-agent')->with("success", "Data Save");
            }
        }

        return redirect()->back()->with('fail', $this->validation->listErrors());
    }

    public function agentCommissionDetails($agentid)
    {
        $passangerinfo = $this->userDetailModel->findAll();

        $commission = $this->agentCommissionModel
            ->select('agentcommissions.*,agents.*,agentcommissions.id as commissionid,
                agentcommissions.user_id as commission_user_id,
                agentcommissions.commission as commissionamount,
                agents.id as agentid')
            ->join('agents', 'agents.id  = agentcommissions.agent_id')
            ->join('subtrips', 'subtrips.id   = agentcommissions.subtrip_id')
            ->where('agentcommissions.agent_id', $agentid)
            ->findAll();

        foreach ($commission as $key => $cvalue) {
            foreach ($passangerinfo as $nkey => $pvalue) {
                if ($pvalue->user_id == $cvalue->commission_user_id) {
                    $commission[$key]->commission_user_id = $pvalue->first_name . ' ' . $pvalue->last_name;
                }
            }

            $commission[$key]->first_name = $cvalue->first_name . ' ' . $cvalue->last_name;
        }

        $data['commission'] = $commission;
        $data['module'] = lang("Localize.agent");
        $data['title']  = lang("Localize.transaction_list");

        return view($this->Viewpath . '\commission\index', $data);
    }

    public function agentTransactionDetails($agentid)
    {
        $fromDate = date('Y-m-01');
        $toDate = date('Y-m-d');
        $data['transaction'] = $this->agentTotal->where('DATE(created_at) >=', $fromDate)->where('DATE(created_at) <=', $toDate)->where('agent_id', $agentid)->findAll();
        $data['filepath'] = $this->Viewpath;
        $data['agentId'] = $agentid;

        $data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users', 'users.id = agents.user_id')->where('users.role_id', 2)->where('agents.id', $agentid)->first();
        $heading = lang("Localize.agent") . ' ' . lang("Localize.transaction_list");
        $data['pageheading'] = $heading;
        $data['module'] =    lang("Localize.agent");
        $data['title']  =    lang("Localize.transaction_list");
        $data['currency_symbol']  =    $this->session->get('currency_symbol');

        return view($this->Viewpath . '\transaction/index', $data);
    }

    public function agentTranDateRange()
    {
        $fromDate = $this->request->getVar('start_date');
        $toDate = $this->request->getVar('end_date');
        $agetnID = $this->request->getVar('agetnID');
        $data['transaction'] = $this->agentTotal->where('DATE(created_at) >=', $fromDate)->where('DATE(created_at) <=', $toDate)->where('agent_id', $agetnID)->findAll();
        $data['agentId'] = $agetnID;
        $data['filepath'] = $this->Viewpath;

        $heading = lang("Localize.agent") . ' ' . lang("Localize.transaction_list");
        $data['pageheading'] = $heading;

        $data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users', 'users.id = agents.user_id')->where('users.role_id', 2)->where('agents.id', $agetnID)->first();


        $data['module'] =    lang("Localize.agent");
        $data['title']  =    lang("Localize.transaction_list");

        $data['currency_symbol']  =    $this->session->get('currency_symbol');

        echo view($this->Viewpath . '\transaction/index', $data);
    }


    public function imgaeCheck($image, $path)
    {
        $newName = $image->getRandomName();
        $path = $path;
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }

    public function status($useragentId)
    {
        $userStatus = $this->userModel->find($useragentId);

        if ($userStatus->status == 1) {
            $upData = array(
                "id" => $useragentId,
                "status" => 0
            );
            $this->userModel->save($upData);
        }
        if ($userStatus->status == 0) {
            $upData = array(
                "id" => $useragentId,
                "status" => 1
            );
            $this->userModel->save($upData);
        }
        return redirect()->route('index-agent')->with("success", "Data Update");
    }

    public function delete(int $agentId)
    {
        $agentInfo = $this->agentModel->find($agentId);
        $agentUserId = $agentInfo->user_id;
        $agentLastName = $agentInfo->last_name;

        try {
            $this->db->transStart();
            $this->agentModel->delete($agentId);
            $this->userModel->delete($agentUserId);
            $this->db->transComplete();
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        return redirect()->back()->with('fail', "Agent: {$agentLastName} deleted");
    }

    public function restore(int $agentId)
    {
        $agentInfo = $this->agentModel->withDeleted()->find($agentId);
        $agentUserId = $agentInfo->user_id;
        $agentLastName = $agentInfo->last_name;

        try {
            $this->db->transStart();
            $this->agentModel->set('deleted_at', null)->update($agentId);
            $this->userModel->set('deleted_at', null)->update($agentUserId);
            $this->db->transComplete();
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        return redirect()->route('trash-index-agent')->with('success', "Agent: {$agentLastName} restored");
    }
}
