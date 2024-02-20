<?php

namespace Modules\User\Controllers;

use App\Controllers\BaseController;

use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use Modules\Agent\Models\AgentModel;
use Modules\Website\Models\WebsettingModel;
use CodeIgniter\API\ResponseTrait;


class User extends BaseController
{


    use ResponseTrait;
    protected $Viewpath;
    protected $userModel;
    protected $userDetailModel;
    protected $agentDetailModel;
    protected $roleModel;
    protected $websetting;


    public function __construct()
    {

        $this->Viewpath = "Modules\User\Views";
        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();
        $this->agentDetailModel = new AgentModel();
        $this->roleModel = new RoleModel();
        $this->db = \Config\Database::connect();

        $this->websetting = new WebsettingModel();
    }


    public function editprofile()
    {
        // build user id and role id
        $roleId = $this->session->get('role_id');
        $userId = $this->session->get('user_id');

        // build details model name
        // agentDetails if role id equals 2. rest is userDetails
        $detailsModel = ($roleId == 2) ? 'agentDetailModel' : 'userDetailModel';

        // build user info and user details info
        $userInfo = $this->userModel->find($userId);
        $data['user'] = $userInfo;
        $data['user_detail'] = $this->{$detailsModel}->where('user_id', $userInfo->id)->first();

        // build layout data
        $builder = $this->db->table('country');
        $query = $builder->get();
        $data['country'] = $query->getResult();
        $data['pageheading'] = lang("Localize.profile") . ' ' . lang("Localize.settings");

        return view($this->Viewpath . '\user\edit', $data);
    }


    public function changelogininfo()
    {
        $userId = $this->session->get('user_id');

        // build user login info
        $data = array(
            "id" => $userId,
            "login_email" => $this->request->getVar('login_email'),
            "login_mobile" => $this->request->getVar('login_mobile')
        );

        if ($this->validation->run($data, 'user')) {
            // data is valid
            $this->userModel->save($data);
            return redirect()->route('editprofile-user')->with("success", "Data Update");
        }

        return redirect()->route('editprofile-user')->withInput()->with("fail", $this->validation->listErrors());
    }

    public function changepassword()
    {
        $userId = $this->session->get('user_id');
        $oldpassword = $this->request->getVar('oldpassword');
        $newpassword = $this->request->getVar('password');
        $newrepassword = $this->request->getVar('repassword');

        $userdata = $this->userModel->find($userId);
        $pass = $userdata->password;

        if (password_verify($oldpassword, $pass) !== false) {
            $data = array(
                "id" => $userId,
                "password" => $newpassword,
                "repassword" => $newrepassword,
                "oldpassword" => $oldpassword
            );

            $updateData = array(
                "id" => $userId,
                "password" => password_hash($newpassword, PASSWORD_DEFAULT),
            );

            if ($this->validation->run($data, 'resetpassadmin')) {
                $this->userModel->save($updateData);
                return redirect()->route('editprofile-user')->with("success", "Data Update");
            }

            $error = $this->validation->listErrors();
            goto got_error;
        }

        $error = "Old Password Not Match";

        got_error:
        return redirect()->route('editprofile-user')->with("fail", $error);
    }

    public function changeprofileinfo()
    {
        // build user id and role id
        $roleId = $this->session->get('role_id');
        $userId = $this->session->get('user_id');

        // build details model name
        // agentDetails if role id equals 2. rest is userDetails
        $detailsModel = ($roleId == 2) ? 'agentDetailModel' : 'userDetailModel';
        $validateRuleGroup = ($roleId == 2) ? 'agent' : 'userDetail';

        // build user info and user details info
        $userdata = $this->{$detailsModel}->where('user_id', $userId)->first();;

        $updateData = array(
            "id" => $userdata->id,
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'),
            "country_id" => $this->request->getVar('country_id'),
            "id_type" => $this->request->getVar('id_type') ?: null,
            "id_number" => $this->request->getVar('id_number') ?: null,
            "address" => $this->request->getVar('address'),
            "city" => $this->request->getVar('city'),
            "zip_code" => $this->request->getVar('zip_code'),
            "zip" => $this->request->getVar('zip_code'),
        );

        if ($this->validation->run($updateData, $validateRuleGroup)) {
            // data is valid
            // do update
            $this->{$detailsModel}->save($updateData);
            return redirect()->route('editprofile-user')->with("success", "Data Updated");
        }

        return redirect()->route('editprofile-user')->withInput()->with("fail", $this->validation->listErrors());
    }

    public  function ProfilePicUpload(int $userId)
    {
        // build user id and role id
        $roleId = $this->session->get('role_id');

        // build details model name
        // agentDetails if role id equals 2. rest is userDetails
        $detailsModel = ($roleId == 2) ? 'agentDetailModel' : 'userDetailModel';

        $path = 'image/agent';
        $image =  $this->request->getFile('image');
        $ppicImagePath = $this->request->getVar('adminprofile');

        if ($image->isValid() && !$image->hasMoved()) {
            $ppicImagePath = $this->imgaeCheck($image, $path);
        }

        $data = array(
            "id" => $userId,
            "image" => $ppicImagePath,
            "profile_picture" => $ppicImagePath,
        );

        $result = $this->{$detailsModel}->save($data);

        if (!empty($result)) {
            return redirect()->route('editprofile-user')->with("success", "Picture Upload Successful");
        }

        return redirect()->route('editprofile-user')->with("fail", "Picture Upload Fail");
    }


    public function imgaeCheck($image, $path)
    {
        $newName = $image->getRandomName();
        $path = $path;
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }
}
