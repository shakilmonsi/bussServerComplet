<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;
use Modules\Ticket\Models\PartialpaidModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Paymethod\Models\PaymethodModel;

use App\Libraries\Ticketmail;

use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;

use Modules\User\Models\UserModel;

class Partialpaid extends BaseController
{

    protected $Viewpath;
    protected $partialpayModel;
    protected $ticketModel;
    protected $paymethodModel;
    protected $db;
    protected $agentModel;
    protected $agentCommissionModel;
    protected $userModule;

    public function __construct()
    {
        $this->Viewpath = "Modules\Ticket\Views";
        $this->partialpayModel = new PartialpaidModel();
        $this->ticketModel = new TicketModel();
        $this->paymethodModel = new PaymethodModel();
        $this->agentModel = new AgentModel();
        $this->agentCommissionModel = new Agentcommission();
        $this->db = \Config\Database::connect();
        $this->userModule = new UserModel();
    }

    public function new($ticketid)
    {
        // build ticket info
        $ticket = $this->ticketModel->find($ticketid);
        $data['ticket'] = $ticket;

        // build all payment amount 
        $partialpayamount = $this->partialpayModel->getPartialPayments($ticket->booking_id);
        $data['allPayment'] = $partialpayamount;

        // fetch all paymethods
        $data['paymethod'] = $this->paymethodModel->findAll();
        $data['amountToPay'] = (int) $ticket->paidamount - (int) array_sum(array_column($partialpayamount, 'paidamount'));

        // Build view vars
        $data['pageheading'] = lang("Localize.partial") . ' ' . lang("Localize.pay");
        return view($this->Viewpath . '\partialpay\new', $data);
    }

    public function create()
    {
        $ticketmailLibrary = new Ticketmail();

        // Build payment vars
        $passangerid = $this->request->getVar('passanger_id');
        $passengeremail = $this->userModule->find($passangerid);
        $bookingid = $this->request->getVar('booking_id');
        $tickeid = $this->request->getVar('ticket_id');
        $backUserId = $this->session->get('user_id');
        $payment_detail_rocord = $this->request->getVar('paydetail');
        $paidamount = $this->request->getVar('paidamount');
        $subtripid = $this->request->getVar('subtrip_id');
        $maitripid = $this->request->getVar('trip_id');
        $rand = $this->request->getVar('booking_id');

        $patialPayData = array(
            "booking_id" => $this->request->getVar('booking_id'),
            "trip_id" => $this->request->getVar('trip_id'),
            "subtrip_id" => $this->request->getVar('subtrip_id'),
            "passanger_id" => $this->request->getVar('passanger_id'),
            "paidamount" => $this->request->getVar('paidamount'),
            "pay_type_id" => $this->request->getVar('pay_method'),
            "payment_detail" => $this->request->getVar('paydetail'),
        );

        if ($this->validation->run($patialPayData, 'partialpay')) {
            // begin db transaction
            $this->db->transStart();

            // Insert to partial pay model
            $this->partialpayModel->insert($patialPayData);

            // Get current total paid amount
            $totalamount = $this->partialpayModel->selectSum('paidamount')->where('booking_id', $bookingid)->findAll();
            $ticketamout = $this->ticketModel->where('booking_id', $bookingid)->first();

            if ((int) $totalamount[0]->paidamount >= (int) $ticketamout->paidamount) {
                $data = [
                    'id' => $tickeid,
                    'payment_status' => "paid",
                ];

                $this->ticketModel->save($data);
            } else {
                $data = [
                    'id' => $tickeid,
                    'payment_status' => "partial",
                ];

                $this->ticketModel->save($data);
            }

            if ($this->session->get('role_id') == 2) {
                // user is agent
                // Insert amount to agent commissions and agent totals
                agentIncomeCommission($backUserId, $paidamount, $rand, $subtripid, $ticketamout->passanger_id, 'For Partial Ticket Payment');
                agentTotal($backUserId, $paidamount, $rand, 'income', $payment_detail_rocord);
            }

            // Insert data to account transaction
            $paymethod_id = $this->request->getVar('pay_method');
            accoutTranjection('income', 'Ticket Booking (' . $rand . ') ', $paidamount, $backUserId);
            paymethodTeanjection($rand, $paymethod_id, $paidamount, $payment_detail_rocord, $maitripid, $subtripid, $backUserId);

            // commit database
            $this->db->transComplete();

            // Send mail
            $emaildata = $ticketmailLibrary->getticketEmailData($bookingid);
            $status = sendTicket($passengeremail->login_email, $emaildata);

            if ($status == true) {
                return redirect()->route('allbookinglist-ticket')->with("success", "Payment Successfull");
            }
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function paymentdetail($ticketbookingid)
    {
        $data['ticket'] = $this->ticketModel->find($ticketbookingid);
        $data['allpayment'] = $this->partialpayModel->getPartialPayments($ticketbookingid);

        // Build view vars
        $data['pageheading'] = lang("Localize.payment") . ' ' . lang("Localize.details");
        return view($this->Viewpath . '\partialpay\index', $data);
    }

    public function agentCommission($totalprice)
    {
        $userId = $this->session->get('user_id');
        $agetnDetail =  $this->agentModel->where('user_id', $userId)->first();
        (float) $commission = (float) (($totalprice) * ($agetnDetail->commission / 100));
        return $commission;
    }
}
