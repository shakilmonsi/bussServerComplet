<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Paymethod\Models\GatewaytotalModel;

class PayGatewayTotals extends DeleteData
{
    public function __construct()
    {
        $this->title = 'payment gateway total amount';
        $this->model = new GatewaytotalModel;
        $this->model->select('gatewaytotals.id, CONCAT(gatewaytotals.detail, " - Amount: ", gatewaytotals.amount) AS name');
    }
}
