<?php

namespace Modules\Location\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Location\Models\StandModel;

class Stand extends BaseController
{
	private $standModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->standModel = new StandModel();
    }

	public function index()
    {

        $stands = $this->standModel->withDeleted()->findAll();

        if (!empty($stands)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $stands,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "stand not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }
}
