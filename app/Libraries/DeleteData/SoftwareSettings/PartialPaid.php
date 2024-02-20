<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Ticket\Models\PartialpaidModel;

class PartialPaid extends DeleteData
{
    public function __construct()
    {
        $this->title = 'partial paids';
        $this->model = new PartialpaidModel;
        $this->model->select('partialpaids.id, CONCAT(partialpaids.booking_id, "- Paid amount: ", partialpaids.paidamount) AS name');
    }
}
