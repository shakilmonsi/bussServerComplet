<?php

namespace Modules\Schedule\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Schedule\Models\ScheduleModel;

class Schedule extends BaseController
{

	protected $scheduleModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->scheduleModel = new ScheduleModel();
    }

	public function index()
    {

        $schedule = $this->scheduleModel->findAll();

        if (!empty($schedule)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $schedule,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Schedule not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }
}
