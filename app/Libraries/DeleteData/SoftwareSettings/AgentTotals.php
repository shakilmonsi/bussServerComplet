<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Agent\Models\AgenttotalModel;

class AgentTotals extends DeleteData
{
    public function __construct()
    {
        $this->title = 'agent totals';
        $this->model = new AgenttotalModel;
        $this->model->select('agenttotals.id, CONCAT("Income: ", agenttotals.income, " Expense: ", agenttotals.expense) AS name');
    }
}
