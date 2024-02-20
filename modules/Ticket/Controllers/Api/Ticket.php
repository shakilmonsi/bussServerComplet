<?php

namespace Modules\Ticket\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Employee\Models\EmployeeModel;
use Modules\Fleet\Models\FleetModel;
use Modules\Fleet\Models\VehicleModel;
use Modules\Location\Models\LocationModel;
use Modules\Location\Models\StandModel;
use Modules\Paymethod\Models\PaymethodModel;
use Modules\Schedule\Models\ScheduleModel;
use Modules\Tax\Models\TaxModel;
use Modules\Ticket\Models\JourneylistModel;
use Modules\Ticket\Models\PartialpaidModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Ticket\Models\MaxtimeModel;
use Modules\Trip\Models\FacilityModel;
use Modules\Trip\Models\PickdropModel;
use Modules\Trip\Models\StuffassignModel;
use Modules\Trip\Models\SubtripModel;
use Modules\Trip\Models\TripModel;
use Modules\User\Models\UserDetailModel;
use Modules\User\Models\UserModel;

use App\Libraries\Ticketmail;
use Modules\Paymethod\Models\StripeModel;
use Modules\Website\Models\WebsettingModel;

class Ticket extends BaseController
{
    use ResponseTrait;

    protected $Viewpath;
    protected $ticketModel;
    protected $tripModel;
    protected $subtripModel;
    protected $stuffassignModel;
    protected $locationModel;
    protected $employeeModel;
    protected $fleetTypeModel;
    protected $scheduleeModel;
    protected $vehicleModel;
    protected $standModel;
    protected $picdropModel;
    protected $facilitypModel;
    protected $taxModel;
    protected $db;
    protected $paymethodModel;
    protected $stripeModel;
    protected $userModel;
    protected $userDetailModel;
    protected $journeylistModel;
    protected $partialpaidModel;
    protected $maxtimeModel;
    protected $webSettingModel;

    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->tripModel = new TripModel();
        $this->subtripModel = new SubtripModel();
        $this->stuffassignModel = new StuffassignModel();
        $this->locationModel = new LocationModel();
        $this->employeeModel = new EmployeeModel();
        $this->fleetTypeModel = new FleetModel();
        $this->vehicleModel = new VehicleModel();
        $this->scheduleeModel = new ScheduleModel();
        $this->standModel = new StandModel();
        $this->picdropModel = new PickdropModel();
        $this->facilitypModel = new FacilityModel();
        $this->taxModel = new TaxModel();
        $this->db = \Config\Database::connect();
        $this->paymethodModel = new PaymethodModel();
        $this->stripeModel = new StripeModel;

        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();

        $this->journeylistModel = new JourneylistModel();
        $this->partialpaidModel = new PartialpaidModel();

        $this->maxtimeModel = new MaxtimeModel();
        $this->webSettingModel = new WebsettingModel;
    }



    public function bookticket()
    {
        $ticketmailLibrary = new Ticketmail();
        $ticketid = null;
        $rand = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 8);
        $rand = "TB" . $rand;

        $journeyDate =  date("Y-m-d", strtotime($this->request->getVar('journeydate')));


        $login_email = $this->request->getVar('login_email');
        $login_mobile = $this->request->getVar('login_mobile');
        $this->db->transStart();

        $userid = $this->userCheck($login_email, $login_mobile);
        if (empty($userid)) {
            $data = [
                'message' => "User check fail",
                'status' => "fail",
                'response' => 404,
                'data' => "user check error",
            ];
            return $this->response->setJSON($data);
        }






        $ticketbooking = array(
            "booking_id" => $rand,
            "trip_id" => $this->request->getVar('trip_id'),
            "subtrip_id" => $this->request->getVar('subtripId'),
            "passanger_id" => $userid,
            "pick_location_id" => $this->request->getVar('pick_location_id'),
            "drop_location_id" => $this->request->getVar('drop_location_id'),
            "pick_stand_id" => $this->request->getVar('pickstand'),
            "drop_stand_id" => $this->request->getVar('dropstand'),
            "price" => $this->request->getVar('totalprice'),
            "discount" => $this->request->getVar('discount'),
            "totaltax" => $this->request->getVar('tax'),
            "paidamount" => $this->request->getVar('grandtotal'),
            "adult" => $this->request->getVar('aseat'),
            "chield" => $this->request->getVar('cseat'),
            "special" => $this->request->getVar('spseat'),
            "refund" => 0,
            "bookby_user_id" => $userid,
            "bookby_user_type" => "passanger",
            "journeydata" => $journeyDate,
            "pay_method_id" => $this->request->getVar('pay_method'),
            "payment_status" => $this->request->getVar('payment_status'),
            "payment_detail" => $this->request->getVar('paydetail'),
            "vehicle_id" => $this->request->getVar('vehicle_id'),
            "cancel_status" => 0,

            "offerer" => $this->request->getVar('offerer'),

            "seatnumber" => $this->request->getVar('seatnumbers'),
            "totalseat" => $this->request->getVar('totalseat'),

        );

        $validTicketbooking = array(

            "booking_id" => $rand,
            "trip_id" => $this->request->getVar('trip_id'),
            "subtrip_id" => $this->request->getVar('subtripId'),
            "passanger_id" => $userid,

            "pick_location_id" => $this->request->getVar('pick_location_id'),
            "drop_location_id" => $this->request->getVar('drop_location_id'),
            "pick_stand_id" => $this->request->getVar('pickstand'),
            "drop_stand_id" => $this->request->getVar('dropstand'),

            "price" => $this->request->getVar('totalprice'),
            "paidamount" => $this->request->getVar('grandtotal'),
            "seatnumber" => $this->request->getVar('seatnumbers'),
            "totalseat" => $this->request->getVar('totalseat'),
            "bookby_user_id" => 1,
            "journeydata" => $this->request->getVar('journeydate'),

            "payment_status" => $this->request->getVar('payment_status'),
            "vehicle_id" => $this->request->getVar('vehicle_id'),

        );


        if ($this->validation->run($validTicketbooking, 'ticket')) {


            $paymentStatus = $this->request->getVar('payment_status');

            if ($paymentStatus == "unpaid") {
                $paidamount = 0;
            }
            if ($paymentStatus == "paid") {
                $paidamount = $this->request->getVar('grandtotal');
            }
            if ($paymentStatus == "partial") {
                $paidamount = $this->request->getVar('partialpay');
            }



            $ticketid = $this->ticketModel->insert($ticketbooking);

            if (empty($ticketid)) {

                $data = [
                    'message' => "booking data error",
                    'status' => "success",
                    'response' => 204,
                    'data' => "booking data not appropriate",
                ];
                return $this->response->setJSON($data);
            }



            $partialPaid = array(
                "booking_id" => $rand,
                "trip_id" => $this->request->getVar('trip_id'),
                "subtrip_id" => $this->request->getVar('subtripId'),
                "passanger_id" => $userid,
                "paidamount" => $paidamount,

            );
            $paidpartial = array(
                "booking_id" => $rand,
                "trip_id" => $this->request->getVar('trip_id'),
                "subtrip_id" => $this->request->getVar('subtripId'),
                "passanger_id" => $userid,
                "paidamount" => $paidamount,
                "pay_method_id" => $this->request->getVar('pay_method'),
                "payment_detail" => $this->request->getVar('paydetail'),
            );




            if ($this->validation->run($partialPaid, 'partialpay')) {

                $this->partialpaidModel->insert($paidpartial);




                $maitripid = $this->request->getVar('trip_id');
                $subtripid = $this->request->getVar('subtripId');
                $piclocation = $this->request->getVar('pick_location_id');
                $droplocation = $this->request->getVar('drop_location_id');
                $pick_stand_id = $this->request->getVar('pickstand');
                $drop_stand_id = $this->request->getVar('dropstand');

                $journeylist = $this->journeylist($rand, $userid, $maitripid, $subtripid, $piclocation, $droplocation, $pick_stand_id, $drop_stand_id);

                if (empty($journeylist)) {
                    $data = [
                        'status' => "fail",
                        'response' => 204,
                        'data' => "journey list data not inserted",
                    ];
                }

                $this->db->transComplete();




                $ticketInfo =  $this->ticketModel->find($ticketid);



                $emaildata = $ticketmailLibrary->getticketEmailData($rand);

                $status = sendTicket($login_email, $emaildata);

                if ($status == true) {
                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $ticketInfo,
                    ];
                } else {
                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $ticketInfo,
                        'emailerror' => $status,
                    ];
                }
            } else {

                $errors = $this->validation;
                $data = [
                    'message' => "Booking & Paid Information Not Valid",
                    'status' => "failed",
                    'response' => 204,
                    'errors' => $errors->listErrors(),
                ];
            }
        } else {

            $errors = $this->validation;
            $data = [
                'message' => "Booking Information Not Valid",
                'status' => "failed",
                'response' => 204,
                'errors' => $errors,
            ];
        }


        $emaildata = $ticketmailLibrary->getticketEmailData($rand);

        $status = sendTicket($login_email, $emaildata);

        return $this->response->setJSON($data);
    }

    public function journeylist($rand, $userid, $maitripid, $subtripid, $piclocation, $droplocation, $pick_stand_id, $drop_stand_id)
    {
        $journeydate = date("Y-m-d", strtotime($this->request->getVar('journeydate')));
        $joruneylistid = null;

        $mainpassanger = array(
            "booking_id" => $rand,
            "trip_id" => $maitripid,
            "subtrip_id" => $subtripid,
            "pick_location_id" => $piclocation,
            "drop_location_id" => $droplocation,
            "pick_stand_id" => $pick_stand_id,
            "drop_stand_id" => $drop_stand_id,
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'),
            "phone" => $this->request->getVar('login_mobile'),
            "journeydate" => $journeydate,
            "id_number" => $this->request->getVar('id_number'),
        );

        if ($this->validation->run($mainpassanger, 'journeylist')) {

            $joruneylistid = $this->journeylistModel->insert($mainpassanger);
        }



        $newPassangerFName = $this->request->getVar('first_name_new');
        $newPassangerLName = $this->request->getVar('last_name_new');
        $newPassangerMobile = $this->request->getVar('login_mobile_new');
        $newPassangerNidNumber = $this->request->getVar('id_number_new');

        $newPassangerFName =  json_decode($newPassangerFName, true);
        $newPassangerLName =  json_decode($newPassangerLName, true);
        $newPassangerMobile =  json_decode($newPassangerMobile, true);
        $newPassangerNidNumber =  json_decode($newPassangerNidNumber, true);

        if (!empty($newPassangerFName)) {
            foreach ($newPassangerFName as $nkey => $newpassanger) {
                $newpassangerlist[$nkey] = array(

                    "booking_id" => $rand,
                    "trip_id" => $maitripid,
                    "subtrip_id" => $subtripid,
                    "pick_location_id" => $piclocation,
                    "drop_location_id" => $droplocation,
                    "pick_stand_id" => $pick_stand_id,
                    "drop_stand_id" => $drop_stand_id,
                    "first_name" => $newPassangerFName[$nkey],
                    "last_name" => $newPassangerLName[$nkey],
                    "phone" => $newPassangerMobile[$nkey],
                    "journeydate" => $journeydate,
                    "id_number" => $newPassangerNidNumber[$nkey],

                );
            }



            $alljourneydata =  $this->journeylistModel->insertBatch($newpassangerlist);

            if (empty($alljourneydata)) {
                $data = [
                    'message' => "Multiple Pasanger input error",
                    'status' => "failed",
                    'response' => 204,
                    'data' => "journey list input error",
                ];
                return $this->response->setJSON($data);
            }
        }


        return   $joruneylistid;
    }


    public function userCheck($login_email, $login_mobile)
    {
        $userid = null;
        $evalue = $this->userModel->where('login_email', $login_email)->findAll();
        $mvalue = $this->userModel->where('login_mobile', $login_mobile)->findAll();

        if (!empty($evalue) || !empty($mvalue)) {

            if ($evalue) {
                foreach ($evalue as $key => $mobilevalue) {
                    $userid = $mobilevalue->id;
                }
            }
            if ($mvalue) {
                foreach ($mvalue as $key => $emailvalue) {
                    $userid = $emailvalue->id;
                }
            }

            return $userid;
        } else {

            $status = 1;
            $role_id = 3;
            $slug = bin2hex(random_bytes(5));
            $password = $confirm = "123456";


            $userData = array(
                "login_email" => $login_email,
                "login_mobile" => $login_mobile,
                "password" => $password,
                "confirm" => $confirm,
                "slug" => $slug,
                "role_id" => $role_id,
                "status" => $status,
            );

            if ($this->validation->run($userData, 'user')) {
                $this->db->transStart();

                $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
                $userid = $this->userModel->insert($userData);

                $validdata = array(
                    "user_id" => $userid,
                    "first_name" => $this->request->getVar('first_name'),
                    "last_name" => $this->request->getVar('last_name'),
                    "id_type" => $this->request->getVar('id_type') ?: null,
                    "id_number" => $this->request->getVar('id_number') ?: null,
                    "country_id" => $this->request->getVar('country_id'),
                );

                if ($this->validation->run($validdata, 'userDetail')) {
                    $data = array(
                        "user_id" => $userid,
                        "first_name" => $this->request->getVar('first_name'),
                        "last_name" => $this->request->getVar('last_name'),
                        "id_type" => $this->request->getVar('id_type') ?: null,
                        "country_id" => $this->request->getVar('country_id'),
                        "id_number" => $this->request->getVar('id_number') ?: null,
                        "address" => $this->request->getVar('address'),
                        "city" => $this->request->getVar('city'),
                        "zip_code" => $this->request->getVar('zip_code'),

                    );

                    $this->userDetailModel->insert($data);

                    $this->db->transComplete();
                }
            }

            return $userid;
        }
    }

    public function busSeat($subTripId, $journeyDate)
    {
        $bookSeat = array();
        $maxtime = $this->maxtimeModel->first();
        $maxtime =  60 * (int)$maxtime->maxtime;
        $journeyDate = date("Y-m-d", strtotime($journeyDate));

        $getData = $this->ticketModel
            ->where('subtrip_id', $subTripId)
            ->where('journeydata', $journeyDate)
            ->where('payment_status', "unpaid")
            ->where('cancel_status', 0)
            ->where('refund', 0)
            ->findAll();

        foreach ($getData as $key => $delvalue) {
            $cratetime = strtotime($delvalue->created_at);
            $timenow = strtotime("now");

            if (($timenow - $cratetime) > $maxtime) {
                $this->ticketModel->where('id', $delvalue->id)->set(['cancel_status' => 1])->update();
                $bookingId = $this->ticketModel->find($delvalue->id);
                $this->journeylistModel->where('booking_id', $bookingId->booking_id)->delete();
            }
        }

        $displaySeat = array();
        $sortingdisplaySeat = array();
        $anotherarray = array();
        $lastSeat = null;

        // sub trip and fllet details
        $subtripInfo = $this->subtripModel
            ->select('subtrips.*, trips.fleet_id')
            ->join('trips', 'subtrips.trip_id = trips.id')
            ->where('subtrips.id', $subTripId)
            ->first();

        $getFleetDetails = $this->fleetTypeModel->where('status', 1)->find($subtripInfo->fleet_id);

        // total seat
        $totalseat = (int) $getFleetDetails->total_seat + (int)$getFleetDetails->last_seat;

        // booked seats
        $this->ticketModel
            ->where('journeydata', $journeyDate)
            ->where('cancel_status', 0);

        if ($subtripInfo->type == 'subtrip') {
            $mainTripId = $subtripInfo->trip_id;
            $subtripStoppagePointsArr = array_filter(explode(',', $subtripInfo->stoppage));
            $mainTripMainSubtripId = $this->subtripModel->where('trip_id', $mainTripId)->where('type', 'main')->first();

            $this->ticketModel
                ->groupStart()
                    ->whereIn('subtrip_id', [$subtripInfo->id, $mainTripMainSubtripId->id])

                    ->orGroupStart()
                        ->where('trip_id', $subtripInfo->trip_id)
                        ->whereIn('pick_location_id', array_filter($subtripStoppagePointsArr, fn ($stp_id) => $stp_id != $subtripInfo->drop_location_id))
                    ->groupEnd()

                    ->orGroupStart()
                        ->where('trip_id', $subtripInfo->trip_id)
                        ->whereIn('drop_location_id', array_filter($subtripStoppagePointsArr, fn ($stp_id) => $stp_id != $subtripInfo->pick_location_id))
                    ->groupEnd()
                ->groupEnd();
        } else {
            $this->ticketModel->where('trip_id', $subtripInfo->trip_id);
        }

        $resBookSeats = array_column($this->ticketModel->findAll(), 'seatnumber');
        $bookSeat = array_merge(...array_map(fn ($v) => explode(',', $v), $resBookSeats));

        // build layout
        $layout = explode("-", $getFleetDetails->layout);
        $seatColumn = count($layout);
        $numberSeatRow = array_sum($layout);
        $seatnumber = explode(",", $getFleetDetails->seat_number);
        $storeSeatNumber = $seatnumber;


        if ($getFleetDetails->last_seat) {
            $lastSeat = array_slice($seatnumber, -1, 1);
            array_pop($seatnumber);
        }
        $totalseatnumber = count($seatnumber);

        $seatloopslicenumber =  floor($totalseatnumber / $numberSeatRow);

        for ($i = 1; $i <= $seatloopslicenumber; $i++) {
            $arrayslice = null;
            $arrayslice = array_splice($seatnumber, $numberSeatRow);
            $displaySeat[$i] = $seatnumber;
            $seatnumber  =  $arrayslice;
        }



        for ($totalseatrow = 1; $totalseatrow  <= $seatloopslicenumber; $totalseatrow++) {

            for ($column = 0; $column < $seatColumn; $column++) {
                $x = 0;
                foreach ($displaySeat[$totalseatrow] as $key => $seatvalue) {

                    if ($layout[$column] >= $key + 1) {
                        array_push($anotherarray, $seatvalue);
                    } else {
                        array_push($anotherarray, null);

                        break;
                    }
                    array_shift($displaySeat[$totalseatrow]);
                }
            }
            $sortingdisplaySeat[$totalseatrow] = $anotherarray;
            $anotherarray = array();
        }





        $kyepos = null;
        if (!empty($lastSeat)) {

            foreach ($sortingdisplaySeat[$seatloopslicenumber] as $key => $checknull) {
                if ($checknull == null) {
                    $sortingdisplaySeat[$seatloopslicenumber][$key] = $lastSeat[0];
                }
            }
        }



        $newseatarray = array();
        $arraynew = array();
        $id = 1;
        foreach ($sortingdisplaySeat as $key => $shortseat) {

            foreach ($shortseat as $skey => $newseat) {

                if ($newseat == null) {
                    array_push($newseatarray, null);
                } else {
                    if (in_array($newseat, $bookSeat)) {
                        $seatvalue = true;
                    } else {
                        $seatvalue = false;
                    }
                    $seatarray  = array(
                        "id" => $id,
                        "seatNumber" => $newseat,
                        "isReserved" => $seatvalue,
                    );
                    array_push($newseatarray, $seatarray);
                }


                $id = $id + 1;
            }

            $arraynew[] = $newseatarray;
            $newseatarray = array();
        }


        $data = [
            'status' => "success",
            'response' => 200,
            'layout' =>  $getFleetDetails->layout,
            'seatlayout' => $arraynew,
            'totalseat' => $totalseat,

        ];

        return $this->response->setJSON($data);
    }


    public function singelBooking($bookingid)
    {



        $ticket =  $this->ticketModel->where('booking_id', $bookingid)->first();

        if (empty($ticket)) {

            $data = [
                'message' => "No ticket Found",
                'status' => "fail",
                'response' => 201,
                'data' => $ticket,
            ];
        } else {
            $passengerdata = $this->userModel->find($ticket->passanger_id);
            $ticket->mobile = $passengerdata->login_mobile;
            $ticket->email = $passengerdata->login_email;
            $passengerdetail = $this->userDetailModel->where('user_id', $passengerdata->id)->first();
            $ticket->fullName = $passengerdetail->first_name . ' ' . $passengerdetail->last_name;

            $company = $this->vehicleModel->where('id', $ticket->vehicle_id)->first();
            $ticket->company = $company->company;


            $company_name = $this->tripModel->where('id', $ticket->trip_id)->first();
            $ticket->company_name = $company_name->company_name;

            $data = [
                'message' => "Ticket found",
                'status' => "success",
                'response' => 200,
                'data' => $ticket,
            ];
        }

        return $this->response->setJSON($data);
    }



    public function paylaterByUser()
    {


        $bookingid = $this->request->getVar('booking_id');

        $paydetail = $this->request->getVar('paydetail');

        $paidamount = $this->request->getVar('paidamount');

        $pay_type_id = $this->request->getVar('pay_method');

        $ticketDetail =  $this->ticketModel->where('booking_id', $bookingid)->first();


        $tickeid =     $ticketDetail->id;
        $backUserId = $ticketDetail->passanger_id;
        $payment_detail_rocord = $paydetail;
        $amountToPaid = $ticketDetail->paidamount;
        $subtripid = $ticketDetail->subtrip_id;
        $maitripid = $ticketDetail->trip_id;
        $rand = $bookingid;


        if ($paidamount == $amountToPaid) {

            $validPaid = array(
                "booking_id" => $bookingid,
                "trip_id" => $maitripid,
                "subtrip_id" => $subtripid,
                "passanger_id" => $backUserId,
                "paidamount" => $paidamount,
                "pay_method_id" => $pay_type_id,
            );
            $paidpartial = array(
                "booking_id" => $bookingid,
                "trip_id" => $maitripid,
                "subtrip_id" => $subtripid,
                "passanger_id" => $backUserId,
                "paidamount" => $paidamount,
                "pay_method_id" => $pay_type_id,
                "payment_detail" => $payment_detail_rocord,
            );

            if ($this->validation->run($validPaid, 'partialpay')) {

                $this->db->transStart();

                $this->partialpaidModel->insert($paidpartial);

                $data = [
                    'id' => $tickeid,
                    'payment_status' => "paid",
                    "pay_method_id" => $pay_type_id,
                ];

                $this->ticketModel->save($data);


                $paymethod_id =  $pay_type_id;
                $payDetail = $payment_detail_rocord;
                $type = "income";
                $detail = "Ticket Booking (" . $rand . ") ";
                accoutTranjection($type, $detail, $paidamount, $backUserId);
                // paymethodTeanjection($rand,$paymethod_id,$paidamount,$payDetail,$maitripid,$subtripid,$backUserId);

                $this->db->transComplete();

                $data = [
                    'message' => "Transaction success",
                    'status' => "success",
                    'response' => 200,

                ];
                return $this->response->setJSON($data);
            } else {

                $data = [
                    'message' => "Error in Validation",
                    'error' => $this->validation->getErrors(),
                    'status' => "fail",
                    'response' => 404,
                ];

                return $this->response->setJSON($data);
            }
        } else {

            $data = [
                'message' => "Error in amount",
                'status' => "fail",
                'response' => 404,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function stripePayment()
    {
        $rules = [
            'stripetoken'  => 'required',
            'amount'       => 'required',
        ];

        if ($this->validate($rules)) {
            $amount = $this->request->getVar('amount');
            $paymentToken = $this->request->getVar('stripetoken');
            $getPayData = $this->stripeModel->first();

            if ($getPayData->environment == 1) {
                $secret_key = $getPayData->live_s_kye;
                $environment = "live";
            } else {
                $secret_key = $getPayData->test_s_kye;
                $environment = "Test";
            }

            $websetting  = $this->webSettingModel->first();
            $currencybuilder = $this->db->table('currencies');
            $curencyquery = $currencybuilder->where('id', $websetting->currency)->get();
            $currency = $curencyquery->getRow()->code;

            try {
                \Stripe\Stripe::setApiKey($secret_key);

                // stripe, old charge code
                /* $paymentIntent = \Stripe\Charge::create([
                    "amount"     => $amount * 100,
                    "currency"     => $currency,
                    "source"     => $paymentToken,
                    "description"   => "Seat Booking Payment"
                ]); */

                // upgrading to 3Ds
                $customer = \Stripe\Customer::create([
                    'name' => 'Jahid Limon',
                    'email' => 'jahid@bdtask.net'
                ]);

                $paymentIntent = \Stripe\PaymentIntent::create([
                    'amount' => $amount,
                    'currency' => $currency,
                    'payment_method_data' => [
                        'type' => 'card',
                        'card' => [
                            'token' => $paymentToken,
                        ],
                    ],
                    'confirmation_method' => 'manual',
                    'customer' => $customer->id
                ]);

                $paymentIntent->confirm();

                $data = [
                    'message'   => "Payment Successfull",
                    'status'    => "success",
                    'response'  => 200,
                    'data'      => $paymentIntent,
                ];
                return $this->response->setJSON($data);
            } catch (\Exception $e) {
                $data = [
                    'message' => "Payment Fail",
                    'status' => "fail",
                    'response' => 404,
                    'data' => $e->getMessage(),
                ];
                return $this->response->setJSON($data);
            }
        } else {
            $data = array(
                'success' => false,
                'response' => 204,
                'message' => 'All field required',
                'data' => $this->validator->getErrors(),
            );
            return $this->response->setJSON($data);
        }
    }

    public function laterBookticket()
    {
        $ticketmailLibrary = new Ticketmail();
        $ticketid = null;
        $rand = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 8);
        $rand = "TB" . $rand;

        $journeyDate =  date("Y-m-d", strtotime($this->request->getVar('journeydate')));


        $login_email = $this->request->getVar('login_email');
        $login_mobile = $this->request->getVar('login_mobile');
        $this->db->transStart();

        $userid = $this->userCheck($login_email, $login_mobile);
        if (empty($userid)) {
            $data = [
                'message' => "User check fail",
                'status' => "fail",
                'response' => 404,
                'data' => "user check error",
            ];
            return $this->response->setJSON($data);
        }






        $ticketbooking = array(
            "booking_id" => $rand,
            "trip_id" => $this->request->getVar('trip_id'),
            "subtrip_id" => $this->request->getVar('subtripId'),
            "passanger_id" => $userid,
            "pick_location_id" => $this->request->getVar('pick_location_id'),
            "drop_location_id" => $this->request->getVar('drop_location_id'),
            "pick_stand_id" => $this->request->getVar('pickstand'),
            "drop_stand_id" => $this->request->getVar('dropstand'),
            "price" => $this->request->getVar('totalprice'),
            "discount" => $this->request->getVar('discount'),
            "totaltax" => $this->request->getVar('tax'),
            "paidamount" => $this->request->getVar('grandtotal'),
            "adult" => $this->request->getVar('aseat'),
            "chield" => $this->request->getVar('cseat'),
            "special" => $this->request->getVar('spseat'),
            "refund" => 0,
            "bookby_user_id" => $userid,
            "bookby_user_type" => "passanger",
            "journeydata" => $journeyDate,
            // "pay_method_id" => $this->request->getVar('pay_method'),
            "pay_method_id" => 999,
            "payment_status" => $this->request->getVar('payment_status'),
            "payment_detail" => $this->request->getVar('paydetail'),
            "vehicle_id" => $this->request->getVar('vehicle_id'),
            "cancel_status" => 0,

            // "offerer" => $this->request->getVar('offerer'),
            "offerer" => 0,
            "seatnumber" => $this->request->getVar('seatnumbers'),
            "totalseat" => $this->request->getVar('totalseat'),

        );

        $validTicketbooking = array(

            "booking_id" => $rand,
            "trip_id" => $this->request->getVar('trip_id'),
            "subtrip_id" => $this->request->getVar('subtripId'),
            "passanger_id" => $userid,

            "pick_location_id" => $this->request->getVar('pick_location_id'),
            "drop_location_id" => $this->request->getVar('drop_location_id'),
            "pick_stand_id" => $this->request->getVar('pickstand'),
            "drop_stand_id" => $this->request->getVar('dropstand'),

            "price" => $this->request->getVar('totalprice'),
            "paidamount" => $this->request->getVar('grandtotal'),
            "seatnumber" => $this->request->getVar('seatnumbers'),
            "totalseat" => $this->request->getVar('totalseat'),
            "bookby_user_id" => 1,
            "journeydata" => $this->request->getVar('journeydate'),

            "payment_status" => $this->request->getVar('payment_status'),
            "vehicle_id" => $this->request->getVar('vehicle_id'),

        );


        if ($this->validation->run($validTicketbooking, 'ticket')) {


            $paymentStatus = $this->request->getVar('payment_status');

            if ($paymentStatus == "unpaid") {
                $paidamount = 0;
            }




            $ticketid = $this->ticketModel->insert($ticketbooking);

            if (empty($ticketid)) {

                $data = [
                    'message' => "booking data error",
                    'status' => "success",
                    'response' => 204,
                    'data' => "booking data not appropriate",
                ];
                return $this->response->setJSON($data);
            }



            $partialPaid = array(
                "booking_id" => $rand,
                "trip_id" => $this->request->getVar('trip_id'),
                "subtrip_id" => $this->request->getVar('subtripId'),
                "passanger_id" => $userid,
                "paidamount" => $paidamount,

            );
            $paidpartial = array(
                "booking_id" => $rand,
                "trip_id" => $this->request->getVar('trip_id'),
                "subtrip_id" => $this->request->getVar('subtripId'),
                "passanger_id" => $userid,
                "paidamount" => $paidamount,
                "pay_method_id" => 999,
                "payment_detail" => $this->request->getVar('paydetail'),
            );




            if ($this->validation->run($partialPaid, 'partialpay')) {

                $this->partialpaidModel->insert($paidpartial);




                $maitripid = $this->request->getVar('trip_id');
                $subtripid = $this->request->getVar('subtripId');
                $piclocation = $this->request->getVar('pick_location_id');
                $droplocation = $this->request->getVar('drop_location_id');
                $pick_stand_id = $this->request->getVar('pickstand');
                $drop_stand_id = $this->request->getVar('dropstand');

                $journeylist = $this->journeylist($rand, $userid, $maitripid, $subtripid, $piclocation, $droplocation, $pick_stand_id, $drop_stand_id);

                if (empty($journeylist)) {
                    $data = [
                        'status' => "fail",
                        'response' => 204,
                        'data' => "journey list data not inserted",
                    ];
                }

                $this->db->transComplete();




                $ticketInfo =  $this->ticketModel->find($ticketid);




                $emaildata = $ticketmailLibrary->getticketEmailData($rand);

                $status = sendTicket($login_email, $emaildata);

                if ($status == true) {
                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $ticketInfo,
                    ];
                } else {
                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $ticketInfo,
                        'emailerror' => $status,
                    ];
                }
            } else {

                $errors = $this->validation;
                $data = [
                    'message' => "Booking & Paid Information Not Valid",
                    'status' => "failed",
                    'response' => 204,
                    'errors' => $errors->listErrors(),
                ];
            }
        } else {

            $errors = $this->validation->getErrors();
            $data = [
                'message' => "Booking Information Not Valid",
                'status' => "failed",
                'response' => 204,
                'errors' => $errors,
            ];
        }

        return $this->response->setJSON($data);
    }
}
