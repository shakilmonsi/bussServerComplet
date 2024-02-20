<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Ticket\Models\RefundModel;

class Refund extends DeleteData
{
    public function __construct()
    {
        $this->title = 'booking refunds';
        $this->model = new RefundModel;
        $this->model->select('refunds.id, CONCAT("Amount: ", refunds.refund_fee, " on booking ", refunds.booking_id) AS name');
    }
}
