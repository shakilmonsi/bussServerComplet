<?php

namespace Modules\Trip\Controllers\Api;

use App\Controllers\BaseController;

use Modules\Trip\Models\FacilityModel;
use CodeIgniter\API\ResponseTrait;

class Facility extends BaseController
{
	
	protected $facilityModel;
	use ResponseTrait;
	
	public function __construct()
    {

	
		$this->facilityModel = new FacilityModel();
      
    }

	
	public function index()
    {

        $facility = $this->facilityModel->findAll();

        if (!empty($facility)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $facility,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Facility not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }
}
