<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\User\Models\UserDetailModel;

class UserDetails extends DeleteData
{
    public function __construct()
    {
        $this->title = 'user details';
        $this->model = new UserDetailModel;
        $this->model->select('user_details.id, CONCAT(user_details.first_name, " ", user_details.last_name) AS name');
    }
}
