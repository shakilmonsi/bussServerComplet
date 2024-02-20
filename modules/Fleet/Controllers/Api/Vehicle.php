<?php

namespace Modules\Fleet\Controllers\Api;

use App\Controllers\BaseController;
use Modules\Fleet\Models\Vehicalimage;
use Modules\Fleet\Models\VehicleModel;
use CodeIgniter\API\ResponseTrait;

class Vehicle extends BaseController
{

	protected $vehicleImage;
	protected $vehicleModel;
	use ResponseTrait;
	public function __construct()
    {
		$this->vehicleImage = new Vehicalimage();
		$this->vehicleModel = new VehicleModel();
    }

	public function index()
	{
		$vehicle = $this->vehicleModel->findAll();
		

        if (!empty($vehicle)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $vehicle,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Vehicle not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
	}


	public function singleVehicle($id)
	{

		$vehicleimage =  $this->vehicleImage->where('vehicle_id',$id)->findAll();

		foreach ($vehicleimage as $key => $value) {
			$value->img_path = base_url().'/public/'.$value->img_path;
		}


		$vehicle = $this->vehicleModel->find($id);

		$vehicle->allimg = $vehicleimage;
		

        if (!empty($vehicle)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $vehicle,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Vehicle not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
	}
}
