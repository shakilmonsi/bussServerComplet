<?php

namespace App\Controllers;

use App\Libraries\Chart;
use Modules\Localize\Models\LocalizeModel;
use Modules\Account\Models\AccountModel;
use Modules\Agent\Models\AgentModel;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Website\Models\FooterModel;
use Modules\Website\Models\WebsettingModel;

class Home extends BaseController
{
    protected $localizeModel;
    protected $accountModel;
    protected $userModel;
    protected $footerModel;
    protected $userDetalModel;
    protected $agentDetailsModel;
    protected $websettingModel;

    public function __construct()
    {
        $this->localizeModel = new LocalizeModel();
        $this->accountModel = new AccountModel();
        $this->userModel = new UserModel();
        $this->footerModel = new FooterModel();
        $this->userDetalModel = new UserDetailModel();
        $this->agentDetailsModel = new AgentModel();
        $this->websettingModel = new WebsettingModel();
    }

    public function index()
    {
        return redirect()->route('admin-home');
    }

    public function admin()
    {
        $charrLibrary = new Chart();

        // Dashboard top summery
        $todaytrip = $charrLibrary->totalTripToday();
        $totalBooking = $charrLibrary->totalBooking();
        $totalMoney = $charrLibrary->totalMoney();
        $totalPassanger = $charrLibrary->totalPassanger();

        // Dashboard income and expense
        $totalYear = $charrLibrary->assendingYear();
        $totalEarn = $charrLibrary->getIncome();
        $totalExpense = $charrLibrary->getExpense();
        $incomeMonth = $charrLibrary->monthIncome();
        $expanseMonth = $charrLibrary->monthExpense();
        $incomeWeek = $charrLibrary->weekIncome();
        $expenseWeek = $charrLibrary->weekExpense();

        // Dashboard pay method graph
        $payMethod = $charrLibrary->payTypeChart();

        // Agent booking graph
        $agentData = $charrLibrary->getAgentBooking();

        // Total booking graph
        $ticketBook = $charrLibrary->getTicketBookingByMonth();


        $payLable = array();
        $payData = array();
        foreach (array_filter($payMethod) as $key => $value) {
            array_push($payLable, $key);
            array_push($payData, round($value, 2));
        }

        $agentLable = array();
        $agentTicketData = array();
        foreach ($agentData as $akey => $avalue) {
            array_push($agentLable, $avalue->name);
            array_push($agentTicketData, $avalue->paidamount);
        }

        $data['year'] = implode(",", $totalYear);
        $data['income'] = implode(",", $totalEarn);
        $data['expense'] = implode(",", $totalExpense);
        $data['languagelist'] = $this->localizeModel->findAll();
        $data['monthincome'] = implode(",", $incomeMonth);
        $data['monthexpense'] = implode(",", $expanseMonth);

        $data['weekincome'] =    implode(",", $incomeWeek);
        $data['weekexpense'] =    implode(",", $expenseWeek);


        $data['paylable'] =    implode(",", $payLable);
        $data['paydata'] =    implode(",", $payData);

        $data['agentLable'] = implode(",", $agentLable);
        $data['agentAmount'] = implode(",", $agentTicketData);

        $data['bookticket'] = implode(",", $ticketBook);

        $data['todaytrip'] = $todaytrip;
        $data['todaybooking'] = $totalBooking;
        $data['totalmoney'] = $totalMoney;
        $data['totalpassanger'] = $totalPassanger;

        $data['module'] =    lang("Localize.dashboard");
        $data['title']  =    lang("Localize.dashboard");

        return view('template/admin/welcome', $data);
    }

    public function login()
    {
        // get settings
        $settings = $this->websettingModel->first();
        $this->session->set('apptitle', $settings->apptitle);

        // build logo ext
        $logo_text = $settings->logotext;

        // build base64 logo image
        $logo_contents = file_get_contents(ROOTPATH . '/public/' . $settings->headerlogo);
        $logo_base64 = base64_encode($logo_contents);

        return view('template/web/auth/login', [
            'settings' => $settings,
            'logo_text' => $logo_text,
            'logo_base64' => $logo_base64,
            'pageheading' => lang('Localize.login_page_title'),
        ]);
    }

    public function language($lang)
    {
        // $session = session();
        $locale = $this->request->getLocale();

        $this->session->remove('lang');
        $this->session->set('lang', $lang);

        return "true";
    }

    public function languageprint()
    {
        $data = view_cell('\App\Libraries\Language::testdata');
        // $filepath = APPPATH."/Language/default/language.php";
        $filepath = APPPATH . "/Language/Hindi/language.php";
        // dd($filepath);

        write_file($filepath, $data);
    }


    public function sendMail()
    {

        // dd("fdf");

        $sendeMail = "shakib46@gmail.com";
        $data['test']    = 145;

        $sendMail = sendTicket($sendeMail, $data);

        print_r($sendMail);
    }

    public function forgetpassload()
    {
        return view('template/web/auth/forgetload');
    }

    public function checkmail()
    {
        $email = $this->request->getVar('email');

        $findEmail = $this->userModel->where('login_email', $email)->first();

        if (!empty($findEmail)) {
            $userType = $findEmail->role_id;
            $detailsModel = ($userType != 2) ? 'userDetalModel' : 'agentDetailsModel';
            $userDetai = $this->{$detailsModel}->where('user_id', $findEmail->id)->first();

            $code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 8);

            $data = array(
                "id" => $findEmail->id,
                "recovery_code" => $code,
            );

            $this->userModel->save($data);

            $address = $this->footerModel->first();
            $companydetail = $this->websettingModel->first();

            $data['code'] = $code;
            $data['contact'] = $address->contact;
            $data['email'] = $address->email;
            $data['opentime'] = $address->opentime;
            $data['address'] = $address->address;
            $data['logotext'] = $companydetail->logotext;
            $data['name'] = $userDetai->first_name . " " . $userDetai->last_name;

            $status = sendemail($findEmail->login_email, $data);

            $slugarray = array();

            array_push($slugarray, $findEmail->slug);


            if ($status) {
                return redirect()->route('changepassword', $slugarray)->with("success", "Email is sent to the email address");
            } else {
                return redirect()->route('forgetpassload')->with("fail", "Error in Network");

                // print_r($status);
            }
        } else {
            return redirect()->route('forgetpassload')->with("fail", "Email address Not Found");
        }
    }


    public function changePassword($slug)
    {
        $data['slug'] = $slug;
        return view('template/web/auth/resetpass', $data);
    }


    public function confirmPassword()
    {


        $recovery_code = $this->request->getVar('recovery_code');
        $password = $this->request->getVar('password');
        $repassword = $this->request->getVar('repassword');
        $slug = $this->request->getVar('slug');

        $slugarray = array();
        array_push($slugarray, $slug);

        $finduser = $this->userModel->where('slug', $slug)->first();

        $validdata = array(
            "recovery_code" => $this->request->getVar('recovery_code'),
            "password" => $this->request->getVar('password'),
            "repassword" => $this->request->getVar('repassword'),
        );

        if ($finduser->recovery_code != $recovery_code) {
            return redirect()->route('changepassword', $slugarray)->with("fail", "Recovery Code not match");
        }


        $data = array(
            "id" => $finduser->id,
            'password' => password_hash($password, PASSWORD_DEFAULT),

        );



        if ($this->validation->run($validdata, 'resetpass')) {
            $this->userModel->save($data);
            return redirect()->route('login')->with("success", "Password Change Successfull");
        } else {
            return redirect()->route('changepassword', $slugarray)->with("fail", "Password not match");
        }
    }
}
