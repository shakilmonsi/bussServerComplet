<?php

namespace App\Libraries;

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

use Modules\Website\Models\FooterModel;
use Modules\Website\Models\WebsettingModel;

class Ticketmail

{


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

	protected $footerModel;
	protected $websettingModel;

	public function __construct()
	{


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

		$this->footerModel = new FooterModel();
		$this->websettingModel = new WebsettingModel();
	}


	public function getticketEmailData($ticketbookingid)
	{

		$namefacility = array();
		$start = null;
		$destination = null;

		$totalpaid = $this->partialPaidModel->selectSum('paidamount')->where('booking_id', $ticketbookingid)->find();


		$data['ticket'] = $this->ticketModel->select('tickets.created_at as bookingdate,tickets.*,users.*,user_details.*')
			->join('users', 'users.id = tickets.passanger_id')
			->join('user_details', 'user_details.user_id = users.id')
			->where('booking_id', $ticketbookingid)->first();

		$gettripdata =  $this->tripModel->find($data['ticket']->trip_id);

		$travelartripdata =  $this->subtripModel->find($data['ticket']->subtrip_id);

		$locationModel = $this->locationModel->findAll();

		foreach ($locationModel as $key => $locvalue) {

			if ($locvalue->id == $gettripdata->pick_location_id) {
				$start = $locvalue->name;
			}
			if ($locvalue->id == $gettripdata->drop_location_id) {
				$destination = $locvalue->name;
			}
		}

		foreach ($locationModel as $key => $locvalue) {
			if ($locvalue->id == $travelartripdata->pick_location_id) {
				$travelarpic = $locvalue->name;
			}
			if ($locvalue->id == $travelartripdata->drop_location_id) {
				$travelardrop = $locvalue->name;
			}
		}

		$data['from'] = $start;
		$data['to'] = $destination;

		$data['travelerPick'] = $travelarpic;
		$data['travelerDrop'] = $travelardrop;

		(float) $due = (int)$data['ticket']->paidamount - (int)$totalpaid[0]->paidamount;

		if ($due > 0) {
			$data['due'] = $due;
		} else {
			$data['due'] = 0.0;
		}

		$data['schedule'] = $this->scheduleeModel->withDeleted()->find($gettripdata->schedule_id);

		$getfacility = $gettripdata->facility;


		if (!empty($getfacility)) {
			$facility = explode(",", $getfacility);
			foreach ($facility as $key => $facilityvalue) {
				$facilityname =  $this->facilitypModel->withDeleted()->find($facilityvalue);
				array_push($namefacility, $facilityname->name);
			}
			$data['facility'] = implode(", ", $namefacility);
		} else {
			$data['facility'] = "No facility";
		}



		$data['facility'] = implode(", ", $namefacility);

		$data['pageheading'] = "Invoice";
		$data['pickdrop'] = $this->picdropModel
			->select('pickdrops.*,stands.*,pickdrops.id as pickdropid')
			->join('stands', 'stands.id = pickdrops.stand_id')
			->findAll();

		$address = $this->footerModel->first();
		$companydetail = $this->websettingModel->first();

		$data['contact'] = $address->contact;
		$data['companyemail'] = $address->email;
		$data['opentime'] = $address->opentime;
		$data['companyaddress'] = $address->address;
		$data['companylogotext'] = $companydetail->logotext;

		return $data;
	}
}
