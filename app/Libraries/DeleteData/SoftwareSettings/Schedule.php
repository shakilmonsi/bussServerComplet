<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Schedule\Models\ScheduleModel;

class Schedule extends DeleteData
{
    public function __construct()
    {
        $this->title = 'schedules';
        $this->model = new ScheduleModel;
        $this->model->select('schedules.id, CONCAT(schedules.start_time, " ", schedules.end_time) AS name');

        $this->relatives[] = [new Trip, 'schedule_id'];
    }
}
