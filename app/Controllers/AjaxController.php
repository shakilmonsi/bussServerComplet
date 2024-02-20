<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Coupon\Models\CouponModel;
use Modules\Fleet\Models\Vehicalimage;
use Modules\Fleet\Models\VehicleModel;
use Modules\Localize\Models\LanguageModel;
use Modules\Location\Models\StandModel;
use Modules\Trip\Models\SubtripModel;
use Modules\User\Models\UserDetailModel;
use Modules\User\Models\UserModel;

class AjaxController extends BaseController
{

    protected $fleetModel;
    protected $vImageModel;
    protected $standModel;

    protected $userModel;
    protected $userDetailModel;
    protected $db;
    protected $subtripModel;

    protected $couponModel;

    protected $languageModel;

    use ResponseTrait;
    public function __construct()
    {

        $this->Viewpath = "Modules\Fleet\Views";

        $this->vehicleModel = new VehicleModel();
        $this->vImageModel = new Vehicalimage();
        $this->standModel = new StandModel();
        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();

        $this->subtripModel = new SubtripModel();

        $this->couponModel = new CouponModel();
        $this->db = \Config\Database::connect();

        $this->languageModel = new LanguageModel();
    }

    public function getVehicleByFleetId($fleet_id)
    {
        $vehiclelist = $this->vehicleModel->where('fleet_id', $fleet_id)->findAll();
        echo json_encode($vehiclelist);
    }

    public function getallStand()
    {
        $standlist = $this->standModel->findAll();
        echo json_encode($standlist);
    }

    public function picdelete()
    {
        $id = $this->request->getVar('picid');
        $uriseg = $this->vImageModel->find($id);

        $newimagelist = $this->vImageModel->where('vehicle_id', $uriseg->vehicle_id)->findAll();
        unlink($uriseg->img_path);
        $this->vImageModel->delete($id);
        $this->vImageModel->purgeDeleted();

        $data = [
            'status' => "success",
            'response' => 200,
            'data' => json_encode($newimagelist),
        ];

        return $this->response->setJSON($data);
    }

    public function getPassanger($segment, $type)
    {
        if ($type == "email") {
            $userdetail = $this->userModel->join('user_details', 'user_details.user_id = users.id', 'left')->where('login_email', $segment)->first();
        }

        if ($type == "mobile") {
            $userdetail = $this->userModel->join('user_details', 'user_details.user_id = users.id', 'left')->where('login_mobile', $segment)->first();
        }

        if (empty($userdetail)) {
            $data = [
                'status' => "fail",
                'response' => 204,
                'data' => 'Passanger not found'
            ];
            return $this->response->setJSON($data);
        } else if ($userdetail->role_id != 3) {
            $data = [
                'status' => "fail",
                'response' => 401,
                'data' => 'Requested email/mobile is not a Passanger'
            ];
            return $this->response->setJSON($data);
        }

        $data = [
            'status' => "success",
            'response' => 200,
            'data' => json_encode($userdetail),
        ];

        return $this->response->setJSON($data);
    }

    public function getAllCountry()
    {
        $builder = $this->db->table('country');
        $query = $builder->get();
        $country = $query->getResult();

        if (empty($country)) {
            $data = [
                'status' => "fail",
                'response' => 204,
                'message' => 'no data found',
            ];
            return $this->response->setJSON($data);
        } else {
            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $country,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function couponValidation($coupon, $subtripId, $journeyDate)
    {
        // $couponDetail = $this->couponModel->where('code',$coupon)->where('subtrip_id',$subtripId)->findAll();
        $validDetail = $this->couponModel->where('code', $coupon)
            ->where('subtrip_id', $subtripId)
            ->where('end_date >=', $journeyDate)
            ->where('start_date <=', $journeyDate)
            ->findAll();

        if (count($validDetail) == 0) {
            $data = [
                'status' => "fail",
                'response' => 204,
                'message' => 'coupon is not valid',
                'data' => json_encode($validDetail),
            ];
            return $this->response->setJSON($data);
        } else {
            $data = [
                'status' => "success",
                'response' => 200,
                'discount' => $validDetail[0]->discount,
                'data' => json_encode($validDetail),
            ];

            return $this->response->setJSON($data);
        }
    }

    public function getSubTrip($maintrip_id)
    {
        if ($maintrip_id == "all") {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => json_encode($maintrip_id),
            ];

            return $this->response->setJSON($data);
        } else {
            $subtripDetails = $this->subtripModel->select('subtrips.id as subtripsid,subtrips.*,a.name as pickup_location_name,b.name as drop_location_name')
                ->join('locations a', 'a.id = subtrips.pick_location_id', 'left')
                ->join('locations b', 'b.id = subtrips.drop_location_id', 'left')
                ->where('subtrips.trip_id', $maintrip_id)
                ->where('subtrips.status', 1)
                ->findAll();

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => json_encode($subtripDetails),
            ];

            return $this->response->setJSON($data);
        }
    }


    public function getLanguageCode($languageId)

    {
        $langCode = $this->languageModel->find($languageId);

        echo json_encode($langCode);
    }
}
