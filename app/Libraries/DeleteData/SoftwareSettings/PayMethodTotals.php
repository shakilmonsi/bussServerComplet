<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Paymethod\Models\PaymethodtotalModel;

class PayMethodTotals extends DeleteData
{
    public function __construct()
    {
        $this->title = 'payment method total amount';
        $this->model = new PaymethodtotalModel;
        $this->model->select('paymethodtotals.id, CONCAT(paymethodtotals.detail, " - Amount: ", paymethodtotals.amount) AS name');
    }
}
