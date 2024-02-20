<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Trip\Models\SubtripModel;

class SubTrip extends DeleteData
{
    public function __construct()
    {
        $this->title = 'subtrips';
        $this->model = new SubtripModel;
        $this->model->select('subtrips.id, CONCAT(sl1.name, " to ", sl2.name) AS name');
        $this->model->join('locations sl1', 'subtrips.pick_location_id = sl1.id', 'left');
        $this->model->join('locations sl2', 'subtrips.drop_location_id = sl2.id', 'left');

        $this->relatives[] = [new Coupon, 'subtrip_id'];
        $this->relatives[] = [new Ticket, 'subtrip_id'];
        $this->relatives[] = [new TemporaryBook, 'subtrip_id'];
    }
}
