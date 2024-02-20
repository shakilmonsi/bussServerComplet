<?php

namespace Modules\Trip\Controllers\Api;



use App\Controllers\BaseController;
use Modules\Trip\Models\TripModel;
use Modules\Trip\Models\StuffassignModel;
use Modules\Trip\Models\SubtripModel;
use Modules\Trip\Models\PickdropModel;
use Modules\Location\Models\LocationModel;
use Modules\Employee\Models\EmployeeModel;
use Modules\Fleet\Models\FleetModel;
use Modules\Fleet\Models\VehicleModel;
use Modules\Schedule\Models\ScheduleModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Database\RawSql;
use Modules\Rating\Models\RatingModel;

use Modules\Ticket\Models\TicketModel;

class Trip extends BaseController
{
    use ResponseTrait;

    protected $Viewpath;
    protected $tripModel;
    protected $subtripModel;
    protected $stuffassignModel;
    protected $locationModel;
    protected $employeeModel;
    protected $fleetTypeModel;
    protected $scheduleeModel;
    protected $vehicleModel;
    protected $pickdropModel;
    protected $db;
    protected $ratingModel;
    protected $ticketModel;

    public function __construct()
    {
        $this->Viewpath = "Modules\Trip\Views";
        $this->tripModel = new TripModel();
        $this->subtripModel = new SubtripModel();
        $this->stuffassignModel = new StuffassignModel();
        $this->locationModel = new LocationModel();
        $this->employeeModel = new EmployeeModel();
        $this->fleetTypeModel = new FleetModel();
        $this->vehicleModel = new VehicleModel();
        $this->scheduleeModel = new ScheduleModel();
        $this->pickdropModel = new PickdropModel();
        $this->db = \Config\Database::connect();

        $this->ratingModel = new RatingModel();
        $this->ticketModel = new TicketModel();
    }

    public function test()
    {
        echo "helo";
    }

    public function getAllTrip()
    {
        $fleet_id         = $this->request->getVar('fleet_id');
        $pick_location_id = $this->request->getVar('pick_location_id');
        $drop_location_id = $this->request->getVar('drop_location_id');
        $journey_date     = $this->request->getVar('journeydate');

        $journeyDate = date('Y-m-d', strtotime($journey_date));
        $journeyDayOfWeek = date('N', strtotime($journey_date));
        $maxBookDay = date('Y-m-d', strtotime('+1 month'));

        if (empty($pick_location_id)) {
            $data = [
                'message' => "Please pick a location",
                'status' => "failed",
                'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

        if (empty($drop_location_id)) {
            $data = [
                'message' => "Please pick a droping point",
                'status' => "failed",
                'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

        if (empty($journey_date)) {
            $data = [
                'message' => "Please select your journey date",
                'status' => "failed",
                'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

        if (strtotime(date('Y-m-d')) > strtotime($journey_date)) {
            $data = [
                'message' => "No Past Data allow",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

        if (strtotime($journey_date) > strtotime($maxBookDay)) {
            $data = [
                'message' => "No advance booking for this day",
                'status' => "failed",
                'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

        // bind search query
        $this->subtripModel
            ->select('trips.id as tripid, trips.*, fleets.*, schedules.*, vehicles.*, subtrips.id as subtripId, subtrips.*')

            ->join('trips', 'trips.id = subtrips.trip_id')
            ->join('fleets', 'fleets.id = trips.fleet_id')
            ->join('schedules', 'schedules.id = trips.schedule_id')
            ->join('vehicles', 'vehicles.id = trips.vehicle_id')

            ->groupStart()
                ->groupStart()
                    ->where('subtrips.pick_location_id', $pick_location_id)
                    ->where('subtrips.drop_location_id', $drop_location_id)
                ->groupEnd()

                ->orGroupStart()
                    ->whereIn('subtrips.trip_id', function ($subQuery) use ($pick_location_id, $drop_location_id) {
                        $subQuery
                            ->select('sm.trip_id')
                            ->from('subtrips sm')
                            ->where('sm.pick_location_id', $pick_location_id)
                            ->where('sm.drop_location_id', $drop_location_id)
                            ->where('sm.type', 'subtrip');
                    })
                    ->where('subtrips.type', 'main')
                ->groupEnd()
            ->groupEnd()

            ->where('subtrips.status', 1)
            ->orderBy('subtrips.id', 'DESC');

        $fleet_id && $this->subtripModel->where('trips.fleet_id', $fleet_id);
        $allSubTrips =  $this->subtripModel->findAll();
        $data = array('trips' => [], 'in_holiday' => [], 'to_open' => [], 'inactive' => [], 'you_may_like' => []);

        foreach ($allSubTrips as $subTrip) {
            // build rating for trip
            $totalRating = $this->ratingModel
                ->select('COUNT(*) AS t_rat, SUM(rating) AS s_rat, AVG(rating) AS avg_rat')
                ->where('subtrip_id', $subTrip->subtripId)
                ->where('status', 1)
                ->first();

            $subTrip->rating = number_format($totalRating->avg_rat, 1);

            // build booked seats
            $bookedTickets = $this->ticketModel
                ->select(new RawSql('SUM(LENGTH(seatnumber) - LENGTH(REPLACE(seatnumber, ",", "")) + 1) s_length'))
                ->where('journeydata', $journey_date)
                ->where('cancel_status', 0);

            if ($subTrip->type == 'subtrip') {
                $mainTripId = $subTrip->trip_id;
                $subtripStoppagePointsArr = array_filter(explode(',', $subTrip->stoppage));
                $mainTraipMainSubtripId = $this->subtripModel->where('trip_id', $mainTripId)->where('type', 'main')->first();

                $this->ticketModel
                    ->groupStart()
                        ->whereIn('tickets.subtrip_id', [$subTrip->id, $mainTraipMainSubtripId->id])

                        ->orGroupStart()
                            ->where('trip_id', $subTrip->trip_id)
                            ->whereIn('pick_location_id', array_filter($subtripStoppagePointsArr, fn ($stp_id) => $stp_id != $subTrip->drop_location_id))
                        ->groupEnd()

                        ->orGroupStart()
                            ->where('trip_id', $subTrip->trip_id)
                            ->whereIn('drop_location_id', array_filter($subtripStoppagePointsArr, fn ($stp_id) => $stp_id != $subTrip->pick_location_id))
                        ->groupEnd()
                    ->groupEnd();
            } else {
                $this->ticketModel->where('trip_id', $subTrip->trip_id);
            }

            $bookedTickets = $this->ticketModel->first();

            $totalBoking = (int) $bookedTickets->s_length;
            $subTrip->totalbooking = $totalBoking;
            $subTrip->available_seat = (int) $subTrip->total_seat + (int) $subTrip->last_seat - $totalBoking;

            if ($subTrip->status == 0) {
                // subtrip is inactive
                $data['inactive'][] = $subTrip;
                continue;
            }

            if (strtotime($journeyDate) < strtotime($subTrip->startdate)) {
                // subtrip yet not begin
                $data['to_open'][] = $subTrip;
                continue;
            }

            if (@in_array($journeyDayOfWeek, explode(',', $subTrip->weekend))) {
                // subtrip is on holiday
                $data['in_holiday'][] = $subTrip;
                continue;
            }

            if (($subTrip->pick_location_id != $pick_location_id) || ($subTrip->drop_location_id != $drop_location_id)) {
                // subtrip is related to selected locations
                $data['you_may_like'][] = $subTrip;
                continue;
            }

            $data['trips'][] = $subTrip;
        }

        if (!count($data['trips']) && !count($data['you_may_like'])) {
            if (count($data['in_holiday'])) {
                return $this->response->setJSON([
                    'message' => "Holiday for all trips! No trip found.",
                    'status' => "failed",
                    'response' => 204,
                ]);
            }

            if (count($data['to_open'])) {
                return $this->response->setJSON([
                    'message' => "Trips yet not started! No trip found.",
                    'status' => "failed",
                    'response' => 204,
                ]);
            }

            return $this->response->setJSON([
                'message' => "No trip found for this route!",
                'status' => "failed",
                'response' => 204,
            ]);
        }

        return $this->response->setJSON([
            'status' => "success",
            'response' => 200,
            'data' => $data['trips'],
            'suggestions' => $data['you_may_like']
        ]);
    }

    public function showsubtrip()
    {
        $url = base_url();
        $allFronSubTrip =  $this->subtripModel->select('trips.id as tripid,trips.*,schedules.*,subtrips.id as subtripId,subtrips.*')
            ->join('trips', 'trips.id = subtrips.trip_id')
            ->join('schedules', 'schedules.id = trips.schedule_id')
            ->where('subtrips.status', 1)
            ->where('subtrips.show', 1)
            ->findAll();

        if ($allFronSubTrip) {
            foreach ($allFronSubTrip as $key => $value) {
                $value->imglocation = $url . '/public/' . $value->imglocation;
            }

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $allFronSubTrip,
            ];

            return $this->response->setJSON($data);
        } else {
            $data = [
                'message' => "No trip found for this location",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function boarding($id)
    {
        $boarding =  $this->pickdropModel->where('type', 1)->where('trip_id', $id)->findAll();

        if ($boarding) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $boarding,
            ];

            return $this->response->setJSON($data);
        } else {
            $data = [
                'message' => "No Boarding Pint Found",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function dropping($id)
    {
        $boarding =  $this->pickdropModel->where('type', 0)->where('trip_id', $id)->findAll();

        if ($boarding) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $boarding,
            ];

            return $this->response->setJSON($data);
        } else {
            $data = [
                'message' => "No Dropping Pint Found",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }
}
