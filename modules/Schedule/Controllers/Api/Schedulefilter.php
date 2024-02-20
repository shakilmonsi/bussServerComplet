<?php

namespace Modules\Schedule\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Schedule\Models\SchedulefilterModel;

class Schedulefilter extends BaseController
{

	protected $schedulefilterModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->schedulefilterModel = new SchedulefilterModel();
    }
	public function index()
    {

        $schedulefilter = $this->schedulefilterModel->findAll();

        if (!empty($schedulefilter)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $schedulefilter,
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


    public function arrival()
    {

        $schedulefilter = $this->schedulefilterModel->where('type',0)->findAll();

        if (!empty($schedulefilter)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $schedulefilter,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Filter not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }



    public function departure()
    {

        $schedulefilter = $this->schedulefilterModel->where('type',1)->findAll();

        if (!empty($schedulefilter)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $schedulefilter,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Filter not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }



}
