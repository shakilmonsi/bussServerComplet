<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use Modules\Agent\Models\AgentModel;
use Modules\Website\Models\WebsettingModel;
use CodeIgniter\API\ResponseTrait;

class Login extends BaseController
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
        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();
        $this->agentDetailModel = new AgentModel();
        $this->roleModel = new RoleModel();
        $this->db = \Config\Database::connect();

        $this->websetting = new WebsettingModel();
    }

    public function auth()
    {
        $segment = $this->request->getVar('userid');
        $password = $this->request->getVar('password');

        $userInfo = $this->userModel->where('status', 1)
            // select columns
            ->select('id AS user_id, login_email, login_mobile, password, slug, role_id, status')

            // check username
            ->groupStart()
            ->where('login_email', $segment)
            ->orwhere('login_mobile', $segment)
            ->groupEnd()

            // filter passanger login
            ->where('role_id != 3')

            // get result
            ->asArray()
            ->first();

        if (!empty($userInfo)) {
            if (password_verify($password, $userInfo['password'])) {
                $userId = $userInfo['user_id'];
                $userRoleId = $userInfo['role_id'];

                switch ($userRoleId) {
                    case 2:
                        // user is super admin
                        // build super admin user info
                        $userDetails = $this->agentDetailModel
                            ->select('first_name, last_name, id_type, id_number, address, country_id, city, zip AS zip_code, discount, profile_picture')
                            ->where('user_id', $userId)
                            ->asArray()
                            ->first();

                        // additonal super admin data
                        $userDetails['profile_pic'] = base_url('/public/' . $userDetails['profile_picture']);
                        break;

                    default:
                        // build employee user detail
                        $userDetails = $this->userDetailModel
                            ->select('first_name, last_name, id_type, id_number, address, country_id, city, zip_code, \'1\' AS discount, image')
                            ->where('user_id', $userId)
                            ->asArray()
                            ->first();

                        // addtional employee details
                        $userDetails['profile_pic'] = base_url('/public/' . $userDetails['image']);
                        // $userDetails['discount'] = 1;
                        break;
                }

                // get websettings
                $settings = $this->websetting->first();

                // get currency info
                $currencybuilder = $this->db->table('currencies');
                $allCurrency = $currencybuilder->where('id', $settings->currency)->get()->getResult();
                $currency = current($allCurrency);

                // put session data
                // user data
                $this->session->set($userInfo);
                $this->session->set($userDetails);

                // software settings
                $this->session->set([
                    'isLoggedIn'        => true,
                    'logotext'          => $settings->logotext,
                    'currency_country'  => $currency->country,
                    'currency_code'     => $currency->code,
                    'currency_symbol'   => $currency->symbol,
                    'apptitle'          => $settings->apptitle,
                    'logo'              => base_url('/public/' . $settings->headerlogo),
                ]);

                if (!empty($settings->fontfamely)) {
                    $this->session->set('fontfamily', $settings->fontfamely);
                }
                
                if (!empty($settings->localize_name)) {
                    $this->session->set('lang', $settings->localize_name);
                }
                
                if (!empty($settings->favicon)) {
                    $this->session->set('favicon', base_url('/public/' . $settings->favicon));
                }

                // login success
                // redirect to admin home
                return redirect()->route('admin-home')->with("success", sprintf("Welcome %s %s", $userDetails['first_name'], $userDetails['last_name']));
            }

            return redirect()->route('login')->with("fail", "User Id or Password don't match");
        }
        
        return redirect()->route('login')->with("fail", "User Not Found or Disable by Admin");
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->route('login');
    }
}
