<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Schedule\Models\SchedulefilterModel;

class ScheduleFilter extends DeleteData
{
    public function __construct()
    {
        $this->title = 'schedule filters';
        $this->model = new SchedulefilterModel;
        $this->model->select('schedulefilters.id, CONCAT(schedulefilters.start_time, " ", schedulefilters.end_time) AS name');
    }
}
