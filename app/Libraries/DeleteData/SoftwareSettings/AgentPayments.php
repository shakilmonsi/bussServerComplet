<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Account\Models\PayagentModel;

class AgentPayments extends DeleteData
{
    public function __construct()
    {
        $this->title = 'agent payments';
        $this->model = new PayagentModel;
        $this->model->select('payagents.id, CONCAT("Amount: ", payagents.amount) AS name');
    }
}
