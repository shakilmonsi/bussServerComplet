<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Tax\Models\TaxModel;

class Tax extends DeleteData
{
    public function __construct()
    {
        $this->title = 'taxes';
        $this->model = new TaxModel;
        $this->model->select('taxes.id, taxes.name');
    }
}
