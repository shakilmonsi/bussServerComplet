<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;

use Modules\Ticket\Models\PartialpaidModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Paymethod\Models\PaymethodModel;
use Modules\Ticket\Models\RefundModel;
use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;
use Modules\Agent\Models\AgenttotalModel;
use Modules\Ticket\Models\JourneylistModel;

class Refund extends BaseController
{
	protected $Viewpath;
	protected $partialpayModel;
	protected $ticketpayModel;
	protected $paymethodModel;
	protected $db;
	protected $agentModel;
    protected $agentCommissionModel;
    protected $refundModel;

    protected $agetTotalModel;
	
	protected $journeylistModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Ticket\Views";
		$this->partialpayModel = new PartialpaidModel();
		$this->ticketpayModel = new TicketModel();
		$this->paymethodModel = new PaymethodModel();

		$this->agentModel = new AgentModel();
        $this->agentCommissionModel = new Agentcommission();
		$this->db = \Config\Database::connect();

		$this->agetTotalModel = new AgenttotalModel();
		$this->refundModel = new RefundModel();

		$this->journeylistModel = new JourneylistModel();
    }

	public function new($ticketid,$type)
	{
		if ($type == "ticket" ) {
			$data['track_table'] = $this->ticketpayModel->find($ticketid);
		}
		

		$data['type'] = $type;
		$data['paymethod'] = $this->paymethodModel->findAll();

		$data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.refund_list") ;

		$heading = lang("Localize.ticket").' '.lang("Localize.refund");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\refund/new',$data);
	}

	public function create()
	{
		$tableTargetDetail ="";

		$currentuserid = $this->session->get('user_id');
		$type = $this->request->getVar('type');
		$trackTableId = $this->request->getVar('track_table_id');
		$booking_id = $this->request->getVar('booking_id');
		$paymathodid = $this->request->getVar('pay_method');
		$paydetail = $this->request->getVar('detail');
		$refun_fee = $this->request->getVar('refund_fee');


		$validRefund = array(
			"booking_id" => $booking_id,
			"type" => $type,
			"refund_by" => $currentuserid,
			
		  );
		 
		$refund = array(
			"booking_id" => $booking_id,
			"refund_fee" => $refun_fee,
			"track_table_id" => $trackTableId,
			"type" => $type,
			"detail" => $paydetail,
			"pay_type_id" => $paymathodid,
			"refund_by" => $currentuserid,
		 );





		 if ($this->validation->run($validRefund, 'refund')) {

			$this->db->transStart();
			
			$this->refundModel->insert($refund);

			if ($type == "ticket") {

				$data = [
					'id' => $trackTableId,
					'refund' => 1,
				];
				
				$this->ticketpayModel->save($data);

				$tableTargetDetail = $this->ticketpayModel->where('booking_id',$booking_id)->first();
				
			}
			
			else {
				// $tableTargetDetail = ""
			}
			

			$totalamount = $this->partialpayModel->selectSum('paidamount')->where('booking_id',$booking_id)->findAll();

			$refundAmount = (int)$totalamount[0]->paidamount;
			
		

			$userRole = $this->session->get('role_id');

			if ($userRole == 2) {

				if (!empty($refun_fee)) {
					
					$userid = $tableTargetDetail->passanger_id;
					$subtripid = $tableTargetDetail->subtrip_id;
					$payDetail = $paydetail;
					$incometype = "income";
					$detail = "Refund fee (".$booking_id.") ";
					$amount = $refun_fee;

					agentIncomeCommission($currentuserid,$amount,$booking_id,$subtripid,$userid,$detail);
					
					agentTotal($currentuserid,$amount,$booking_id,$incometype,$payDetail);
				
					}

			   

			  }

			  if (!empty($refun_fee)) {
				
				$intype = "income";
                $detail = "Refund (".$booking_id.") ";
				$amount = $refun_fee;
                accoutTranjection($intype,$detail,$amount,$currentuserid);

				paymethodTeanjection($booking_id,$paymathodid,$refun_fee,$paydetail,$tableTargetDetail->trip_id,$tableTargetDetail->subtrip_id,$currentuserid);
			
				}

			  	$paymethod_id = $paymathodid;
                $payDetail = $paydetail;
                $extype = "expense";
                $detail = "Refund (".$booking_id.") ";
                accoutTranjection($extype,$detail,$refundAmount,$currentuserid);


				$agetCommission = $this->agentCommissionModel->where('booking_id',$booking_id)->findAll();

				foreach ($agetCommission as $key => $commissionValue) {

					$data = [
						'id' => $commissionValue->id,
						'commission' => "refund",
					];
					
					$this->agentCommissionModel->save($data);
					
				}
			
				$agetTotal = $this->agetTotalModel->where('booking_id',$booking_id)->where('expense',0)->findAll();

				foreach ($agetTotal as $key => $totalvalue) {
					
					$data = [
						'agent_id' => $totalvalue->agent_id,
						'booking_id' => $totalvalue->booking_id,
						'income' => 0,
						'expense' => $totalvalue->income,
						'detail' => "Refund",
					];

					$this->agetTotalModel->insert($data);
				}

				$this->journeylistModel->where('booking_id', $booking_id)->delete();

			

				$this->db->transComplete();
			
			return redirect()->route('ticketindex-refund')->with("success", "Refund Successful");
	

			
		}

		else
		{
			

			
			if ($type == "ticket" ) {
				$data['track_table'] = $this->ticketpayModel->find($trackTableId);
			}

			$data['type'] = $type;
			$data['paymethod'] = $this->paymethodModel->findAll();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.ticket_booking") ; 
			$data['title']  =    lang("Localize.refund_list") ;

			echo view($this->Viewpath.'\refund/new',$data);

		}
	}

	public function indexTicket()
	{
		$data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.refund_list") ;
		
		$data['refund'] = $this->refundModel->where('type',"ticket")->orderBy('id', 'DESC')->withDeleted()->findAll();

		$heading = lang("Localize.ticket").' '.lang("Localize.refund_list");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\refund/index',$data);
	}
}
