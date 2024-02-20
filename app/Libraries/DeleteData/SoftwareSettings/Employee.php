<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Employee\Models\EmployeeModel;

class Employee extends DeleteData
{
    public function __construct()
    {
        $this->title = 'employees';
        $this->model = new EmployeeModel;
        $this->model->select('employees.id, CONCAT(employees.first_name, " ", employees.last_name) AS name');

        $this->relatives[] = [new StaffAssigns, 'employee_id'];
    }
}
