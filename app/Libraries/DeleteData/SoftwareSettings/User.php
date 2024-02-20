<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\User\Models\UserModel;

class User extends DeleteData
{
    public function __construct()
    {
        $this->title = 'users';
        $this->model = new UserModel;
        $this->model->select('users.id, users.login_email AS name');

        $this->relatives[] = [new Ticket, 'passanger_id'];
        $this->relatives[] = [new UserDetails, 'user_id'];
        $this->relatives[] = [new UserPermission, 'user_id'];
    }
}
