<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Fleet\Models\FleetModel;

class Fleet extends DeleteData
{
    public function __construct()
    {
        $this->title = "fleets";
        $this->model = new FleetModel;
        $this->model->select('fleets.id, fleets.type AS name');

        $this->relatives[] = [new Vehicle, 'fleet_id'];
    }
}
