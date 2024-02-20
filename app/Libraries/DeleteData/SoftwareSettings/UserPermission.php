<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Role\Models\PermissionModel;

class UserPermission extends DeleteData
{
    public function __construct()
    {
        $this->title = 'user permisssions';
        $this->model = new PermissionModel;
        $this->model->select('permissions.id, CONCAT(permissions.menu_title, " on ", users.login_email) AS name');
    }
}
