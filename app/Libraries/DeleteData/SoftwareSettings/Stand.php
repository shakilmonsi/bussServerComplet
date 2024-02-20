<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Location\Models\StandModel;

class Stand extends DeleteData
{
    public function __construct()
    {
        $this->title = 'stands';
        $this->model = new StandModel;
        $this->model->select('stands.id, stands.name');

        $this->relatives[] = [new Pickdrop, 'stand_id'];
    }
}
