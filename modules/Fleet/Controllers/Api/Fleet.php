<?php

namespace Modules\Fleet\Controllers\Api;

use App\Controllers\BaseController;
use Modules\Fleet\Models\FleetModel;
use CodeIgniter\API\ResponseTrait;

class Fleet extends BaseController
{
	protected $fleetModel;
	use ResponseTrait;
	public function __construct()
    {
		$this->fleetModel = new FleetModel();
    }
	public function index()
	{
		$fleets = $this->fleetModel->findAll();

        if (!empty($fleets)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $fleets,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Fleet not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
	}
}
