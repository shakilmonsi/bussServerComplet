<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Agent\Models\Agentcommission;

class AgentCommissions extends DeleteData
{
    public function __construct()
    {
        $this->title = 'agent commissions';
        $this->model = new Agentcommission;
        $this->model->select('agentcommissions.id, CONCAT(agentcommissions.commission, "% on ticket ", agentcommissions.booking_id) AS name');
    }
}
