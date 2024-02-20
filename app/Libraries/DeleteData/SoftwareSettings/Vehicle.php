<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Fleet\Models\VehicleModel;

class Vehicle extends DeleteData
{
    public function __construct()
    {
        $this->title = 'vehicles';
        $this->model = new VehicleModel;
        $this->model->select('vehicles.id, vehicles.reg_no AS name');

        $this->relatives[] = [new Fitness, 'vehicle_id'];
        $this->relatives[] = [new Trip, 'vehicle_id'];
        $this->relatives[] = [new VehicleImage, 'vehicle_id'];
    }
}
