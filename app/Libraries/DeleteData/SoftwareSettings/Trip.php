<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Trip\Models\TripModel;

class Trip extends DeleteData
{
    public function __construct()
    {
        $this->title = 'trips';
        $this->model = new TripModel;
        $this->model->select('trips.id, CONCAT(l1.name, " to ", l2.name) AS name');
        $this->model->join('locations l1', 'trips.pick_location_id = l1.id', 'left');
        $this->model->join('locations l2', 'trips.drop_location_id = l2.id', 'left');

        $this->relatives[] = [new SubTrip, 'trip_id'];
        $this->relatives[] = [new Pickdrop, 'trip_id'];
        $this->relatives[] = [new StaffAssigns, 'trip_id'];
    }
}
