<?php

namespace Modules\Account\Controllers;


use App\Controllers\BaseController;
use App\Libraries\UserCheck;
use Modules\Account\Models\AccountModel;
use Modules\Account\Models\PayagentModel;
use Modules\User\Models\UserDetailModel;
use Modules\Agent\Models\AgentModel;
use Modules\Paymethod\Models\PaymethodModel;
use Modules\Agent\Models\AgenttotalModel;

use App\Libraries\Rolepermission;

class Payagent extends BaseController
{
    protected $Viewpath;
	protected $accountModel;
	protected $userdetailModel;
	protected $agentModel;
	protected $db;
	protected $paymethod;
    protected $agentTotal;
    protected $agentPayment;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Account\Views";
		$this->accountModel = new AccountModel();
		$this->userdetailModel = new UserDetailModel();
		$this->agentModel = new AgentModel();
		$this->paymethod = new PaymethodModel();
		$this->db = \Config\Database::connect();

        $this->agentTotal = new AgenttotalModel();
        $this->agentPayment = new PayagentModel();
      
    }

    function new ()
	 {
        $userchek = new UserCheck();
		$userType = $userchek->getUserType();
        if ($userType == 2) {
			
            $currentUserId =  $this->session->get('user_id');
		    $agentDetail = 	$this->agentModel->where('user_id',$currentUserId)->first();
            $agentid = $agentDetail->id;
            $allTranSaction = $this->agentTotal->where('agent_id',$agentid)->findAll();

            $givenMoney = $this->agentPayment->where('agent_id',$agentid)->findAll();
            $givenTotalMoney = array_sum(array_column($givenMoney, 'amount'));
            $agentIncomeTotal = array_sum(array_column($allTranSaction, 'income'));
            $agentExpenseTotal = array_sum(array_column($allTranSaction, 'expense'));
            $keepMoney = $agentIncomeTotal - $agentExpenseTotal;
            $keepMoney = $keepMoney - $givenTotalMoney;

            if ($keepMoney > 0) {

                $data['keepMoney'] = $keepMoney;
                $data['pageheading'] = lang("Localize.agent_payment");

                $data['module'] =    lang("Localize.account") ; 
                $data['title']  =    lang("Localize.agent_payment") ;
                echo view($this->Viewpath . '\payagent/new',$data);
            }
            else{

                return redirect()->back()->with("fail","Dont Have Money to Submit Request");
            }
           
		}

        else{
            return redirect()->back()->with("fail","Dont Have Permission");
        }

		
        


    }

    public function index()
    {

        $startData = date('Y-m-01');
		$endDate = date('Y-m-d');
		$fromDate = $startData; //$this->request->getVar('start_date');
		$toDate = $endDate; //$this->request->getVar('end_date');

        $agetntPay = $this->agentPayment->select('agents.id as agentId,agents.*,payagents.*')
						->join('agents', 'agents.id = payagents.agent_id','left')
						->where('DATE(payagents.created_at) >=', $fromDate)->where('DATE(payagents.created_at) <=', $toDate)
						->findAll();


        $userchek = new UserCheck();
		$userType = $userchek->getUserType();
        $data['userType'] = $userType;
        $data['pageheading'] = lang("Localize.transaction_list");

		$data['module'] =    lang("Localize.account") ; 
		$data['title']  =    lang("Localize.agent_payment") ;

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "agent_payment";
        $list_data = "agent_payment";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

        $data['payagent'] = $agetntPay;
		echo view($this->Viewpath . '\payagent/index',$data);
    }



    public function create()
	{
        $currentUserId =  $this->session->get('user_id');
        $agentDetail = 	$this->agentModel->where('user_id',$currentUserId)->first();
        $agentid = $agentDetail->id;


		$amount = $this->request->getVar('amount');



		$data= array(
			"agent_id"=> $agentid,
			"amount"=> $amount,
			"status"=> 0,
			
		);

	
		
		if($this->validation->run($data, 'agentpay'))
		{
			
			$this->agentPayment->insert($data);  
			return redirect()->route('index-payagent')->with("success","Data Save");
		}
		
		
		else
		{

            $allTranSaction = $this->agentTotal->where('agent_id',$agentid)->findAll();
            $agentIncomeTotal = array_sum(array_column($allTranSaction, 'income'));
            $agentExpenseTotal = array_sum(array_column($allTranSaction, 'expense'));
            $keepMoney = $agentIncomeTotal - $agentExpenseTotal;
			$data['keepMoney'] = $keepMoney;
			$data['validation'] = $this->validation;
            $data['module'] =    lang("Localize.account") ; 
            $data['title']  =    lang("Localize.agent_payment") ;
            echo view($this->Viewpath . '\payagent/new',$data);

		}
		
	}

    public function status($id,$value)
    {
        $data= array(
			"id" => $id,
			"status"=> $value,
		);
        $this->agentPayment->save($data);
		return redirect()->route('index-payagent')->with("success","Data Save");
    }

    public function delete($id)
	{
		$this->agentPayment->delete($id);
		return redirect()->route('index-payagent')->with("fail","Data Deleted");
	}



    public function range()
    {

        $startData = $this->request->getVar('start_date');
		$endDate = $this->request->getVar('end_date');
		$fromDate = $startData; //$this->request->getVar('start_date');
		$toDate = $endDate; //$this->request->getVar('end_date');

        $agetntPay = $this->agentPayment->select('agents.id as agentId,agents.*,payagents.*')
						->join('agents', 'agents.id = payagents.agent_id','left')
						->where('DATE(payagents.created_at) >=', $fromDate)->where('DATE(payagents.created_at) <=', $toDate)
						->findAll();


        $userchek = new UserCheck();
		$userType = $userchek->getUserType();
        $data['userType'] = $userType;
        $data['pageheading'] = lang("Localize.transaction_list");

		$data['module'] =    lang("Localize.account") ; 
		$data['title']  =    lang("Localize.agent_payment") ;

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "agent_payment";
        $list_data = "agent_payment";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

        $data['payagent'] = $agetntPay;
		echo view($this->Viewpath . '\payagent/index',$data);
    }



    public function edit($id)
	{
		 
		$data['agentpay'] = $this->agentPayment->find($id);
		$data['module'] =    lang("Localize.account") ; 

		$heading = lang("Localize.tranjection").' '.lang("Localize.edit");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\payagent/edit',$data);
	}



    public function update($id)
	{
        
		$amount = $this->request->getVar('amount');

		$data= array(
            "id" => $id,
			"amount"=> $amount,
		);

        $agentPay = $this->agentPayment->find($id);

        $validData= array(
			"agent_id"=> $agentPay->agent_id ,
			"amount"=> $amount,
			"status"=> $agentPay->status,
			
		);
	
		
		if($this->validation->run($validData, 'agentpay'))
		{
			
			$this->agentPayment->save($data);
			return redirect()->route('index-payagent')->with("success","Data Save");
		}
		
		
		else
		{

            $data['agentpay'] = $this->agentPayment->find($id);
            $data['module'] =    lang("Localize.account") ; 

            $heading = lang("Localize.tranjection").' '.lang("Localize.edit");
            $data['pageheading'] = $heading;

            echo view($this->Viewpath . '\payagent/edit',$data);

		}
		
	}



    public function show($agentId)
    {

        $allTranSaction = $this->agentTotal->where('agent_id',$agentId)->findAll();

        $givenMoney = $this->agentPayment->where('agent_id',$agentId)->findAll();
        $givenTotalMoney = array_sum(array_column($givenMoney, 'amount'));
        $agentIncomeTotal = array_sum(array_column($allTranSaction, 'income'));
        $agentExpenseTotal = array_sum(array_column($allTranSaction, 'expense'));
        $totalMoney = $agentIncomeTotal - $agentExpenseTotal;
        $dueMoney = $totalMoney - $givenTotalMoney;
        $data['givenMoney'] = $givenTotalMoney;
        $data['totalMoney'] = $totalMoney;
        $data['dueMoney'] =  $dueMoney;

        $startData = date('Y-m-01');
		$endDate = date('Y-m-d');
		$fromDate = $startData; //$this->request->getVar('start_date');
		$toDate = $endDate; //$this->request->getVar('end_date');

        $agetntPay = $this->agentPayment->select('agents.id as agentId,agents.*,payagents.*')
						->join('agents', 'agents.id = payagents.agent_id','left')
                        ->where('payagents.agent_id',$agentId)
						->where('DATE(payagents.created_at) >=', $fromDate)->where('DATE(payagents.created_at) <=', $toDate)
						->findAll();


        $data['pageheading'] = lang("Localize.transaction_list");

		$data['module'] =    lang("Localize.account") ; 
		$data['title']  =    lang("Localize.agent_payment") ;

        $data['agentid'] =  $agentId;
        $data['payagent'] = $agetntPay;
		echo view($this->Viewpath . '\payagent/singleagent',$data);
    }



    public function singleagentrange()
    {
        $agentId = $this->request->getVar('agentid');
        $allTranSaction = $this->agentTotal->where('agent_id',$agentId)->findAll();

        $givenMoney = $this->agentPayment->where('agent_id',$agentId)->findAll();
        $givenTotalMoney = array_sum(array_column($givenMoney, 'amount'));
        $agentIncomeTotal = array_sum(array_column($allTranSaction, 'income'));
        $agentExpenseTotal = array_sum(array_column($allTranSaction, 'expense'));
        $totalMoney = $agentIncomeTotal - $agentExpenseTotal;
        $dueMoney = $totalMoney - $givenTotalMoney;
        $data['givenMoney'] = $givenTotalMoney;
        $data['totalMoney'] = $totalMoney;
        $data['dueMoney'] =  $dueMoney;

        $startData = $this->request->getVar('start_date');
		$endDate = $this->request->getVar('end_date');
		$fromDate = $startData; //$this->request->getVar('start_date');
		$toDate = $endDate; //$this->request->getVar('end_date');

        $agetntPay = $this->agentPayment->select('agents.id as agentId,agents.*,payagents.*')
						->join('agents', 'agents.id = payagents.agent_id','left')
                        ->where('payagents.agent_id',$agentId)
						->where('DATE(payagents.created_at) >=', $fromDate)->where('DATE(payagents.created_at) <=', $toDate)
						->findAll();


        $data['pageheading'] = lang("Localize.transaction_list");

		$data['module'] =    lang("Localize.account") ; 
		$data['title']  =    lang("Localize.agent_payment") ;

        $data['agentid'] =  $agentId;
        $data['payagent'] = $agetntPay;
		echo view($this->Viewpath . '\payagent/singleagent',$data);
    }





}
