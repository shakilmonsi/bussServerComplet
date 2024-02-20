<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Account\Models\AccountModel;

class Account extends DeleteData
{
    public function __construct()
    {
        $this->title = 'Account';
        $this->model = new AccountModel;
        $this->model->select('accounts.id, accounts.detail AS name');
    }

    public function deleteCallback(string $table, array $deleteData = [])
    {
        $db = \Config\Database::connect();
        $db->table('payagents')->truncate();
    }
}
