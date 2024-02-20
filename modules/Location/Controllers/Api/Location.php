<?php

namespace Modules\Location\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Location\Models\LocationModel;

class Location extends BaseController
{
    private $locationModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->locationModel = new LocationModel();
    }
    public function index()
    {

        $locations = $this->locationModel->findAll();
        foreach ($locations as $key => $value) {
            $value->uniqueid = rand();
        }

        if (!empty($locations)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $locations,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Location not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }
}
