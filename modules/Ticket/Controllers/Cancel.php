<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;

use Modules\Ticket\Models\CancelModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Paymethod\Models\PaymethodModel;

use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;
use Modules\Agent\Models\AgenttotalModel;
use Modules\Ticket\Models\JourneylistModel;

class Cancel extends BaseController
{
	protected $Viewpath;
	protected $cancelModel;
	protected $ticketpayModel;
	protected $paymethodModel;
	protected $db;
	protected $agentModel;
    protected $agentCommissionModel;
   

    protected $agetTotalModel;
	
	protected $journeylistModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Ticket\Views";
		$this->cancelModel = new CancelModel();
		$this->ticketpayModel = new TicketModel();
		$this->paymethodModel = new PaymethodModel();

		$this->agentModel = new AgentModel();
        $this->agentCommissionModel = new Agentcommission();
		$this->db = \Config\Database::connect();

		$this->agetTotalModel = new AgenttotalModel();

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
		$data['title']  =    lang("Localize.cancel_list") ;

		$heading = lang("Localize.ticket").' '.lang("Localize.cancel");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\cancel/new',$data);
	}

	public function create()
	{
        $tableTargetDetail ="";

        $currentuserid = $this->session->get('user_id');
        $type = $this->request->getVar('type');
        $trackTableId = $this->request->getVar('track_table_id');
        $booking_id = $this->request->getVar('booking_id');
        $paymathodid = $this->request->getVar('pay_type_id');
        $paydetail = $this->request->getVar('detail');
        $cancel_fee = $this->request->getVar('cancel_fee');


        $validCancel = array(
            "booking_id" => $booking_id,
            "type" => $type,
            "cancel_by" => $currentuserid,
            
          );
         
        $cancel = array(
            "booking_id" => $booking_id,
            "cancel_fee" => $cancel_fee,
            "track_table_id" => $trackTableId,
            "type" => $type,
            "detail" => $paydetail,
            "pay_type_id" => $paymathodid,
            "cancel_by" => $currentuserid,
         );

		 if ($this->validation->run($validCancel, 'cancel')) {


			$this->db->transStart();
			
			$this->cancelModel->insert($cancel);

			if ($type == "ticket") {

				$data = [
					'id' => $trackTableId,
					'cancel_status' => 1,
				];
				
				$this->ticketpayModel->save($data);

				$tableTargetDetail = $this->ticketpayModel->where('booking_id',$booking_id)->first();
				
			}
			
			else {
				// $tableTargetDetail = ""
			}


			$userRole = $this->session->get('role_id');

			if ($userRole == 2) {

				if (!empty($cancel_fee)) {
					
					$userid = $tableTargetDetail->passanger_id;
					$subtripid = $tableTargetDetail->subtrip_id;
					$payDetail = $paydetail;
					$incometype = "income";
					$detail = "Cancel fee (".$booking_id.") ";
					$amount = $cancel_fee;

					agentIncomeCommission($currentuserid,$amount,$booking_id,$subtripid,$userid,$detail);
					
					agentTotal($currentuserid,$amount,$booking_id,$incometype,$payDetail);
				
					}

			   

			  }



			if (!empty($cancel_fee)) {
				
				$intype = "income";
                $detail = "Cancel (".$booking_id.") ";
				$amount = $cancel_fee;
                accoutTranjection($intype,$detail,$amount,$currentuserid);

				paymethodTeanjection($booking_id,$paymathodid,$cancel_fee,$paydetail,$tableTargetDetail->trip_id,$tableTargetDetail->subtrip_id,$currentuserid);
			
				}

				$this->journeylistModel->where('booking_id', $booking_id)->delete();

			$this->db->transComplete();

			return redirect()->route('ticketindex-cancel')->with("success", "Refund Successful");
			 
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
			$data['title']  =    lang("Localize.cancel_list") ;

			echo view($this->Viewpath.'\cancel/new',$data);
		  }
		 
    }


	public function indexTicket()
	{
		$data['cancel'] = $this->cancelModel->where('type',"ticket")->orderBy('id', 'DESC')->withDeleted()->findAll();

		$data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.cancel_list") ;
		$heading = lang("Localize.ticket").' '.lang("Localize.cancel_list");
		$data['pageheading'] = $heading;
		
		echo view($this->Viewpath.'\cancel\index',$data);
	}
}
