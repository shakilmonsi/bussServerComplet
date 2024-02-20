<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Trip\Models\PickdropModel;

class Pickdrop extends DeleteData
{
    public function __construct()
    {
        $this->title = 'trip pick drop locations';
        $this->model = new PickdropModel;
        $this->model->select('pickdrops.id, pickdrops.detail AS name');

        $this->relatives[] = [new Ticket, 'pick_stand_id'];
        $this->relatives[] = [new Ticket, 'drop_stand_id'];
    }
}
