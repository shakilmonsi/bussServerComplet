<?php

namespace Modules\Account\Controllers;

use App\Controllers\BaseController;
use App\Libraries\UserCheck;
use Modules\Account\Models\AccountModel;
use Modules\User\Models\UserDetailModel;
use Modules\Agent\Models\AgentModel;
use Modules\Paymethod\Models\PaymethodModel;

use App\Libraries\Rolepermission;

class Account extends BaseController
{
    protected $Viewpath;
    protected $accountModel;
    protected $userdetailModel;
    protected $agentModel;
    protected $db;
    protected $paymethod;

    public function __construct()
    {

        $this->Viewpath = "Modules\Account\Views";
        $this->accountModel = new AccountModel();
        $this->userdetailModel = new UserDetailModel();
        $this->agentModel = new AgentModel();
        $this->paymethod = new PaymethodModel();
        $this->db = \Config\Database::connect();
    }


    function new()
    {

        $data['paymethod'] = $this->paymethod->findAll();

        $data['pageheading'] = lang("Localize.add_transaction");

        $data['module'] =    lang("Localize.account");
        $data['title']  =    lang("Localize.add_transaction");
        echo view($this->Viewpath . '\tranjection/new', $data);
    }


    public function create()
    {
        $path = 'image/account';
        $invoice = '';
        $imagedocu =  $this->request->getFile('doc_location');
        $userID = $this->session->get('user_id');

        $type = $this->request->getVar('type');
        $amount = $this->request->getVar('amount');
        $detail = $this->request->getVar('detail');

        if ($imagedocu->isValid() && !$imagedocu->hasMoved()) {
            $invoice     = $this->imgaeCheck($imagedocu, $path);
        }

        $data = array(
            "detail" => $detail,
            "type" => $type,
            "amount" => $amount,
            "system_user_id" => $userID,
            "doc_location" => $invoice,
        );

        $validatedata = array(
            "detail" => $detail,
            "type" => $type,
            "amount" => $amount,
            "system_user_id" => $userID,

        );


        if ($this->validation->run($validatedata, 'account')) {
            $this->accountModel->insert($data);

            $userRole = $this->session->get('role_id');

            if (($userRole == 2)) {
                $totalprice =  $amount;
                $type = $type;
                $message = $detail;

                $agentTotalIncome =   agentTotalNormal($userID, $totalprice, $type, $message);
            }


            return redirect()->route('index-account')->with("success", "Data Save");
        }

        dd($this->validation->listErrors());
        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function index()
    {
        $userchek = new UserCheck();
        $userType = $userchek->getUserType();

        $startData = date('Y-m-01');
        $endDate = date('Y-m-d');
        $fromDate = $startData; //$this->request->getVar('start_date');
        $toDate = $endDate; //$this->request->getVar('end_date');


        $currentUserId =  $this->session->get('user_id');

        // if ($userType == 1) {

        // }

        if ($userType == 2) {


            $this->accountModel->where('system_user_id', $currentUserId);
        }


        $accountdetail = $this->accountModel->select('users.id as loguserid,users.role_id,accounts.*')
            ->join('users', 'users.id = accounts.system_user_id', 'left')
            ->where('DATE(accounts.created_at) >=', $fromDate)->where('DATE(accounts.created_at) <=', $toDate)
            ->findAll();

        foreach ($accountdetail as $key => $avalue) {
            if ($avalue->role_id == 2) {
                $agentTable = $this->db->table("agents");
                $agentTable->select("first_name, last_name");
                $agentTable->where('user_id', $avalue->loguserid);
                $query = $agentTable->get();
                $getName = $query->getRow();
            } else {
                $usersTable = $this->db->table("user_details");
                $usersTable->select("first_name, last_name");
                $usersTable->where('user_id', $avalue->loguserid);
                $query = $usersTable->get();
                $getName = $query->getRow();
            }

            if ($getName) {
                $accountdetail[$key]->name = $getName->first_name . ' ' . $getName->last_name;
            } else {
                $accountdetail[$key]->name = '';
            }
        }

        $data['account'] = array_reverse($accountdetail);

        $data['module'] =    lang("Localize.account");
        $data['title']  =    lang("Localize.transaction_list");

        $data['pageheading'] = lang("Localize.transaction_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_transaction";
        $list_data = "transaction_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


        echo view($this->Viewpath . '\tranjection/index', $data);
    }



    public function transaction()
    {
        $userchek = new UserCheck();
        $userType = $userchek->getUserType();


        $fromDate = $this->request->getVar('start_date');
        $toDate = $this->request->getVar('end_date');


        $currentUserId =  $this->session->get('user_id');

        // if ($userType == 1) {

        // }

        if ($userType == 2) {


            $this->accountModel->where('system_user_id', $currentUserId);
        }


        $accountdetail = $this->accountModel->select('users.id as loguserid,users.role_id,accounts.*')
            ->join('users', 'users.id = accounts.system_user_id', 'left')
            ->where('DATE(accounts.created_at) >=', $fromDate)->where('DATE(accounts.created_at) <=', $toDate)
            ->findAll();

        foreach ($accountdetail as $key => $avalue) {
            if ($avalue->role_id == 2) {
                $agentTable = $this->db->table("agents");
                $agentTable->select("first_name, last_name");
                $agentTable->where('user_id', $avalue->loguserid);
                $query = $agentTable->get();
                $getName = $query->getRow();
                $accountdetail[$key]->name = $getName->first_name . ' ' . $getName->last_name;
            } else {

                $usersTable = $this->db->table("user_details");
                $usersTable->select("first_name, last_name");
                $usersTable->where('user_id', $avalue->loguserid);
                $query = $usersTable->get();
                $getName = $query->getRow();
                $accountdetail[$key]->name = $getName->first_name . ' ' . $getName->last_name;
            }
        }

        $data['account'] = array_reverse($accountdetail);

        $data['module'] =    lang("Localize.account");
        $data['title']  =    lang("Localize.transaction_list");

        $data['pageheading'] = lang("Localize.transaction_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_transaction";
        $list_data = "transaction_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


        echo view($this->Viewpath . '\tranjection/index', $data);
    }


    public function edit($id)
    {
        $data['paymethod'] = $this->paymethod->findAll();
        $data['account'] = $this->accountModel->find($id);
        $data['module'] =    lang("Localize.account");

        $heading = lang("Localize.tranjection") . ' ' . lang("Localize.edit");
        $data['pageheading'] = $heading;

        echo view($this->Viewpath . '\tranjection/edit', $data);
    }

    public function show($id)
    {
        $data['account'] = $this->accountModel->find($id);
        $data['module'] =    lang("Localize.account");

        $heading = lang("Localize.transaction_list") . ' ' . lang("Localize.details");
        $data['pageheading'] = $heading;

        echo view($this->Viewpath . '\tranjection/show', $data);
    }

    public function update($id)
    {
        $path = 'image/account';
        $invoice = '';
        $imagedocu =  $this->request->getFile('doc_location');
        $userID = $this->session->get('user_id');

        if ($imagedocu->isValid() && !$imagedocu->hasMoved()) {
            $invoice     = $this->imgaeCheck($imagedocu, $path);
        } else {
            $invoice = $this->request->getVar('invoiceold');
        }

        $data = array(
            "id" => $id,
            "detail" => $this->request->getVar('detail'),
            "type" => $this->request->getVar('type'),
            "amount" => $this->request->getVar('amount'),
            "system_user_id" => $userID,
            "doc_location" => $invoice,
        );

        $validatedata = array(

            "detail" => $this->request->getVar('detail'),
            "type" => $this->request->getVar('type'),
            "amount" => $this->request->getVar('amount'),
            "system_user_id" => $userID,

        );

        if ($this->validation->run($validatedata, 'account')) {

            $this->accountModel->save($data);
            return redirect()->route('index-account')->with("success", "Data Save");
        } else {
            $data['paymethod'] = $this->paymethod->findAll();
            $data['validation'] = $this->validation;
            $data['account'] = $this->accountModel->find($id);
            $data['module'] =    lang("Localize.account");
            echo view($this->Viewpath . '\tranjection/new', $data);
        }
    }


    public function delete($id)
    {
        $this->accountModel->delete($id);
        return redirect()->route('index-account')->with("fail", "Data Deleted");
    }


    public function imgaeCheck($image, $path)
    {
        $newName = $image->getRandomName();
        $path = $path;
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }
}
