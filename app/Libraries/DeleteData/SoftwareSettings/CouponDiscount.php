<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Coupon\Models\CoupondiscountModel;

class CouponDiscount extends DeleteData
{
    public function __construct()
    {
        $this->title = 'coupon discounts';
        $this->model = new CoupondiscountModel;
        $this->model->select('coupondiscounts.id, CONCAT("Amount: ", coupondiscounts.amount, " on booking ", coupondiscounts.booking_id) AS name');
    }
}
