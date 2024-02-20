<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;

use Modules\Fleet\Models\FleetModel;
use Modules\Fleet\Models\VehicleModel;
use Modules\Location\Models\LocationModel;
use Modules\Location\Models\StandModel;
use Modules\Schedule\Models\ScheduleModel;
use Modules\Tax\Models\TaxModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Ticket\Models\PartialpaidModel;
use Modules\Trip\Models\FacilityModel;
use Modules\Trip\Models\PickdropModel;
use Modules\Trip\Models\SubtripModel;
use Modules\Trip\Models\TripModel;
use Modules\User\Models\UserDetailModel;
use Modules\User\Models\UserModel;
use Modules\Page\Models\TermsModel;


class Ticketinvoice extends BaseController
{
    protected $Viewpath;
    protected $ticketModel;
    protected $partialPaidModel;
    protected $tripModel;
    protected $subtripModel;
    protected $locationModel;
    protected $fleetTypeModel;
    protected $scheduleeModel;
    protected $vehicleModel;
    protected $standModel;
    protected $picdropModel;
    protected $facilitypModel;
    protected $taxModel;
    protected $db;
    protected $userModel;
    protected $userDetailModel;

    protected $termsModel;



    public function __construct()
    {

        $this->Viewpath = "Modules\Ticket\Views";
        $this->ticketModel = new TicketModel();
        $this->tripModel = new TripModel();
        $this->subtripModel = new SubtripModel();
        $this->locationModel = new LocationModel();
        $this->fleetTypeModel = new FleetModel();
        $this->vehicleModel = new VehicleModel();
        $this->scheduleeModel = new ScheduleModel();
        $this->standModel = new StandModel();
        $this->picdropModel = new PickdropModel();
        $this->facilitypModel = new FacilityModel();
        $this->taxModel = new TaxModel();
        $this->db = \Config\Database::connect();
        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();

        $this->partialPaidModel = new PartialpaidModel();

        $this->termsModel = new TermsModel();
    }

    public function show($ticketbookingid)
    {
        $data = $this->buildTicketData($ticketbookingid);
        return view($this->Viewpath . '\invoice\show', $data);
    }

    public function print($ticketbookingid)
    {
        $data = $this->buildTicketData($ticketbookingid);
        return view($this->Viewpath . '\invoice\print', $data);
    }

    public function posinvoice($ticketbookingid)
    {
        $data = $this->buildTicketData($ticketbookingid);
        return view($this->Viewpath . '\invoice\posinvoice', $data);
    }

    private function buildTicketData(string $ticketbookingid)
    {
        // Build ticket info
        $data['ticket'] = $ticketInfo = $this->ticketModel
            ->select('tickets.created_at as bookingdate, tickets.*, users.*, user_details.*')
            ->join('users', 'users.id = tickets.passanger_id')
            ->join('user_details', 'user_details.user_id = users.id')
            ->where('booking_id', $ticketbookingid)
            ->withDeleted()->get()->getRow();

        // Build trip, schedule and subtrip data
        $gettripdata =  $this->tripModel
            ->select('trips.*, l_p.name AS pl_name, l_d.name AS dl_name, sc.start_time, sc.end_time')
            ->join('locations l_p', 'trips.pick_location_id = l_p.id', 'left')
            ->join('locations l_d', 'trips.drop_location_id = l_d.id', 'left')
            ->join('schedules sc', 'trips.schedule_id = sc.id', 'left')
            ->withDeleted()
            ->find($ticketInfo->trip_id);

        $travelartripdata = $this->subtripModel
            ->select('subtrips.*, l_p.name AS pl_name, l_d.name AS dl_name')
            ->join('locations l_p', 'subtrips.pick_location_id = l_p.id')
            ->join('locations l_d', 'subtrips.drop_location_id = l_d.id')
            ->withDeleted()
            ->find($ticketInfo->subtrip_id);

        $data['from'] = $gettripdata->pl_name;
        $data['to'] = $gettripdata->dl_name;
        $data['trip_start_time'] = $gettripdata->start_time;
        $data['trip_end_time'] = $gettripdata->end_time;
        $data['travelerPick'] = $travelartripdata->pl_name;
        $data['travelerDrop'] = $travelartripdata->dl_name;

        // Build payment data
        $totalpaid = $this->partialPaidModel
            ->selectSum('paidamount')
            ->where('booking_id', $ticketbookingid)
            ->first();

        $data['due'] = ((float) $ticketInfo->paidamount - (float) $totalpaid->paidamount) ?: 0.0;

        // Build facilities
        $data['facility'] = "no ficility";

        if ($facilities = $gettripdata->facility) {
            // facility exists
            // explode comma separated facilities
            $facilityArr = explode(",", $facilities);
            $facilityNameArr = [];

            foreach ($facilityArr as $facility) {
                $facilityInfo = $this->facilitypModel->select('name')->withDeleted()->find($facility);
                $facilityNameArr[] = $facilityInfo->name;
            }

            $data['facility'] = implode(", ", $facilityNameArr);
        }

        // Buil pickdrop and policy
        $data['pickdrop'] = $this->picdropModel
            ->select('pickdrops.*,stands.*,pickdrops.id as pickdropid')
            ->join('stands', 'stands.id = pickdrops.stand_id')
            ->withDeleted()
            ->findAll();

        $totalpolicy =  $this->termsModel->first();
        $data['policy'] = $totalpolicy->description;

        $data['pageheading'] = "Invoice";
        $data['pageheading'] = lang("Localize.ticket") . ' ' . lang("Localize.invoice");
        
        return $data;
    }
}
