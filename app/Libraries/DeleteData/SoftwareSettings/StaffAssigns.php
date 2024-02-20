<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Trip\Models\StuffassignModel;

class StaffAssigns extends DeleteData
{
    public function __construct()
    {
        $this->title = 'trip staff assings';
        $this->model = new StuffassignModel;
        $this->model->select('stuffassigns.id, CONCAT(staffemployee.first_name, " on Trip ", stuffassigns.trip_id) AS name');
        $this->model->join('employees staffemployee', 'stuffassigns.employee_id = staffemployee.id', 'left');
    }
}
