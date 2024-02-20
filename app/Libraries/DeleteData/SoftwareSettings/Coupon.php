<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Coupon\Models\CouponModel;

class Coupon extends DeleteData
{
    public function __construct()
    {
        $this->title = 'coupons';
        $this->model = new CouponModel;
        $this->model->select('coupons.id, coupons.code AS name');

        $this->relatives[] = [new CouponDiscount, 'coupon_id'];
    }
}
