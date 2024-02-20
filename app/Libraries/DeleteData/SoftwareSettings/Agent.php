<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Agent\Models\AgentModel;

class Agent extends DeleteData
{
    public function __construct()
    {
        $this->title = 'agents';
        $this->model = new AgentModel;
        $this->model->select('agents.id, agents.user_id, CONCAT(agents.first_name, " ", agents.last_name) AS name');

        $this->relatives[] = [new AgentCommissions, 'agent_id'];
        $this->relatives[] = [new AgentTotals, 'agent_id'];
        $this->relatives[] = [new AgentPayments, 'agent_id'];
        $this->relatives[] = [new Ticket, 'bookby_user_id', 'user_id'];
    }

    public function deleteCallback(string $table, array $deleteData = [])
    {
        $db = \Config\Database::connect();

        if ($table == 'agents') {
            foreach ($deleteData as $agent) {
                $db->table('users')
                    ->where('id', $agent->user_id)
                    ->set('deleted_at', date('Y-m-d H:i:s'))
                    ->update();
            }
        }
    }
}
