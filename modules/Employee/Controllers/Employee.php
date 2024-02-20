<?php

namespace Modules\Employee\Controllers;

use App\Controllers\BaseController;
use Modules\Employee\Models\EmployeeModel;
use Modules\Employee\Models\EmployeeTypeModel;
use App\Libraries\Rolepermission;
use Modules\Role\Models\RoleModel;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class Employee extends BaseController
{
    protected $Viewpath;
    protected $employeeModel;
    protected $employeeTypeModel;
    protected $roleModel;
    protected $db;

    protected $userModel;
    protected $userDetailModel;

    public function __construct()
    {
        $this->Viewpath = "Modules\Employee\Views";
        $this->employeeModel = new EmployeeModel();
        $this->employeeTypeModel = new EmployeeTypeModel();
        $this->db = \Config\Database::connect();

        $this->roleModel = new RoleModel();

        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();
    }

    public function index(bool $showTrashOnly = false)
    {
        // build template data
        $data['module'] = lang("Localize.employee");
        $data['title']  = lang("Localize.employee_list");
        $data['pageheading'] = lang("Localize.employee_list");

        // build role permissions
        $rolepermissionLibrary = new Rolepermission();
        $data['add_data'] = $rolepermissionLibrary->create("add_employee");
        $data['edit_data'] = $rolepermissionLibrary->edit("employee_list");
        $data['delete_data'] = $rolepermissionLibrary->delete("employee_list");

        // build employee list
        $this->employeeModel->select('employees.*,employeetypes.type')
            ->join('employeetypes', 'employeetypes.id = employees.employeetype_id ')
            ->orderBy('employees.id', 'DESC');

        if ($showTrashOnly) {
            $data['trash_view'] = true;
            $this->employeeModel->onlyDeleted();
        }

        $data['employee'] = $this->employeeModel->findAll();

        return view($this->Viewpath . '\employee\index', $data);
    }

    public function new()
    {
        $builder = $this->db->table('country');
        $query   = $builder->get();
        $data['country'] = $query->getResult();
        $data['employeetype'] = $this->employeeTypeModel->findAll();

        $data['module'] =    lang("Localize.employee");
        $data['title']  =    lang("Localize.add_employee");

        $data['pageheading'] = lang("Localize.add_employee");
        $data['role'] = $this->roleModel->whereNotIn('id', [2, 3])->findAll();

        echo view($this->Viewpath . '\employee/new', $data);
    }

    public function view($id)
    {
        $employee = $this->employeeModel
            ->select('employees.*, et.type AS employee_type, c.name AS country_name')
            ->join('employeetypes et', 'employees.employeetype_id = et.id')
            ->join('country c', 'employees.country_id = c.id')
            ->find($id);

        $employeeRole = $this->userModel
            ->select('roles.name AS role_name')
            ->join('roles', 'users.role_id = roles.id')
            ->where('login_email', $employee->email)
            ->first();

        // check employee profile pic and nid image
        $ppic = 'public/' . $employee->profile_picture;
        $nidImage = 'public/' . $employee->nid_picture;

        // build view permission data
        $rolepermissionLibrary = new Rolepermission();
        $data['add_data'] = $rolepermissionLibrary->create("add_employee");
        $data['edit_data'] = $rolepermissionLibrary->edit("employee_list");
        $data['delete_data'] = $rolepermissionLibrary->delete("employee_list");

        // build view template data
        $data['module'] = lang("Localize.employee");
        $data['title']  = lang("Localize.employee_list");
        $data['pageheading'] = lang("Localize.employee") . ' ' . lang("Localize.view");

        // build view single employee data
        $data['employee'] = $employee;
        $data['role_button_text'] = lang('Localize.assign') . ' ' . lang('Localize.role');
        $data['profile_pic'] = !is_file(ROOTPATH . $ppic) ? 'public/image/employee/default-ppic.png' : $ppic;
        $data['nid_image'] = !is_file(ROOTPATH . $nidImage) ? 'public/image/employee/default-nid.png' : $nidImage;

        if (!empty($employeeRole)) {
            $data['user_role'] = $employeeRole->role_name;
            $data['role_button_text'] = lang('Localize.edit') . ' ' . lang('Localize.role');
        }

        return view($this->Viewpath . '\employee\single', $data);
    }

    public function create()
    {
        $imagenid = $imagedocu = '';
        $roleId = $this->request->getVar('role_id');
        $nidimage = $this->request->getFile('nid_picture');
        $profileimage = $this->request->getFile('profile_picture');

        if ($nidimage->isValid() && !$nidimage->hasMoved()) {
            // nid image exist
            $imagenid = $this->imgaeCheck($nidimage);
        }

        if ($profileimage->isValid() && !$profileimage->hasMoved()) {
            // profile pic exits
            $imagedocu     = $this->imgaeCheck($profileimage);
        }

        $employeeData = array(
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'),
            "phone" => $this->request->getVar('phone'),
            "email" => $this->request->getVar('email'),
            "employeetype_id" => $this->request->getVar('employeetype_id'),
            "country_id" => $this->request->getVar('country_id'),
            "blood" => $this->request->getVar('blood'),
            "id_type" => $this->request->getVar('id_type') ?: null,
            "nid" => $this->request->getVar('nid') ?: null,
            "address" => $this->request->getVar('address'),
            "city" => $this->request->getVar('city'),
            "zip" => $this->request->getVar('zip'),
            "profile_picture" => $imagedocu,
            "nid_picture" => $imagenid,
        );

        if ($this->validation->run($employeeData, 'employee')) {
            // employeee data is valid
            // starting database transaction 
            $this->db->transStart();

            // insert to employee model
            $this->employeeModel->insert($employeeData);

            if (!empty($roleId)) {
                // employee has assigned role
                // build password for user login
                $password = $this->request->getVar('password');
                $confirm = $this->request->getVar('confirm');

                // build user model data
                $userData = array(
                    "login_email" => $this->request->getVar('email'),
                    "login_mobile" => $this->request->getVar('phone'),
                    "password" => $password,
                    "confirm" => $confirm,
                    "slug" => bin2hex(random_bytes(5)),
                    "role_id" => $roleId,
                    "status" => 1,
                );

                if ($this->validation->run($userData, 'user')) {
                    // user data is valid
                    // build encrypted password and insert to user model
                    $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
                    $userId = $this->userModel->insert($userData);

                    // build user details model data
                    $userDetailsData = array(
                        "user_id" => $userId,
                        "first_name" => $this->request->getVar('first_name'),
                        "last_name" => $this->request->getVar('last_name'),
                        "country_id" => $this->request->getVar('country_id'),
                        "id_type" => $this->request->getVar('id_type') ?: null,
                        "id_number" => $this->request->getVar('nid') ?: null,
                        "address" => $this->request->getVar('address'),
                        "city" => $this->request->getVar('city'),
                        "zip_code" => $this->request->getVar('zip'),
                        "image" => $imagedocu,
                    );

                    if ($this->validation->run($userDetailsData, 'userDetail')) {
                        // user details data is valid
                        // insert to user details model
                        $this->userDetailModel->insert($userDetailsData);
                    } else {
                        goto validation_fail;
                    }
                } else {
                    goto validation_fail;
                }
            }

            // database transaction completed
            $this->db->transComplete();
            return redirect()->route('index-employee')->with("success", "Data Save");
        }

        validation_fail:
        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function edit($id)
    {
        $builder = $this->db->table('country');
        $query   = $builder->get();
        $data['country'] = $query->getResult();
        $data['employeetype'] = $this->employeeTypeModel->findAll();
        $data['employee'] = $employee = $this->employeeModel->find($id);
        $data['role'] = $this->roleModel->findAll();
        $employeeRole = $this->userModel->where('login_email', $data['employee']->email)->first();

        if (!empty($employeeRole)) {
            $data['user_role'] = $employeeRole->role_id;
        }

        $data['module'] = lang("Localize.employee");
        $data['title']  = lang("Localize.employee_list");

        $heading = lang("Localize.employee") . ' ' . lang("Localize.edit");
        $data['pageheading'] = $heading;

        return view($this->Viewpath . '\employee\edit', $data);
    }

    public function editRole($id)
    {
        $data['module'] = lang("Localize.employee");
        $data['title']  = lang("Localize.employee_list");
        $data['pageheading'] = lang("Localize.employee") . ' ' . lang("Localize.edit");;

        $data['role'] = $this->roleModel->whereNotIn('id', [2, 3])->findAll();
        $data['employee'] = $this->employeeModel->find($id);
        $employeeRole = $this->userModel->where('login_email', $data['employee']->email)->first();

        if (!empty($employeeRole)) {
            $data['user_role'] = $employeeRole->role_id;
            return view($this->Viewpath . '\employee\role\edit', $data);
        }

        return view($this->Viewpath . '\employee\role\new', $data);
    }

    public function update($id)
    {
        $imagenid = $imagedocu = '';

        // employee info
        $email = $this->request->getVar('email');
        $nidimage = $this->request->getFile('nid_picture');
        $profileimage = $this->request->getFile('profile_picture');

        // set default old nid / profile pic image
        $imagenid = $this->request->getVar('documentoldpic');
        $imagedocu = $this->request->getVar('profileoldpic');

        if ($nidimage->isValid() && !$nidimage->hasMoved()) {
            // nid image exists
            $imagenid = $this->imgaeCheck($nidimage);
        }

        if ($profileimage->isValid() && !$profileimage->hasMoved()) {
            // profile pic image exists
            $imagedocu = $this->imgaeCheck($profileimage);
        }

        // build employee model data
        $employeeData = array(
            "id" => $id,
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'),
            "phone" => $this->request->getVar('phone'),
            "email" => $this->request->getVar('email'),
            "employeetype_id" => $this->request->getVar('employeetype_id'),
            "country_id" => $this->request->getVar('country_id'),
            "blood" => $this->request->getVar('blood'),
            "id_type" => $this->request->getVar('id_type') ?: null,
            "nid" => $this->request->getVar('nid') ?: null,
            "address" => $this->request->getVar('address'),
            "city" => $this->request->getVar('city'),
            "zip" => $this->request->getVar('zip'),
            "profile_picture" => $imagedocu,
            "nid_picture" => $imagenid,
        );

        if ($this->validation->run($employeeData, 'employee')) {
            // employee data is valid
            // starting database transaction
            $this->db->transStart();

            // employee login data
            $employeeUser = $this->userModel->where('login_email', $email)->first();

            if ($employeeUser) {
                // employee login/role is exists
                // get current user details
                $currentUserDetails = $this->userDetailModel->where('user_id', $employeeUser->id)->first();

                // build user model data
                $userData = array(
                    "id" => $employeeUser->id,
                    "login_email" => $this->request->getVar('email'),
                    "login_mobile" => $this->request->getVar('phone'),
                );

                if ($this->validation->run($userData, 'user')) {
                    // update user model data
                    $this->userModel->save($userData);

                    // build user details model data
                    $userDetailsData = array(
                        "id" => $currentUserDetails->id,
                        "first_name" => $this->request->getVar('first_name'),
                        "last_name" => $this->request->getVar('last_name'),
                        "country_id" => $this->request->getVar('country_id'),
                        "id_type" => $this->request->getVar('id_type') ?: null,
                        "id_number" => $this->request->getVar('nid') ?: null,
                        "address" => $this->request->getVar('address'),
                        "city" => $this->request->getVar('city'),
                        "zip_code" => $this->request->getVar('zip'),
                        "image" => $imagedocu,
                    );

                    if ($this->validation->run($userData, 'user')) {
                        // update user details modal data
                        $this->userDetailModel->save($userDetailsData);
                    } else {
                        goto validation_fail;
                    }
                } else {
                    goto validation_fail;
                }
            }

            $this->employeeModel->save($employeeData);
            $this->db->transComplete();
            return redirect()->route('view-employee', [$id])->with('success', 'Data saved !');
        }

        validation_fail:
        return redirect()->back()->with('fail', $this->validation->listErrors());
    }

    public function updateRole(int $id)
    {
        $roleId = $this->request->getVar('role_id');

        // get employee full details
        $employeeDetails = $this->employeeModel->find($id);
        $employeeUserDetails = $this->userModel->where('login_email', $employeeDetails->email)->first();

        // starting database transaction
        $this->db->transStart();

        try {
            if (empty($employeeUserDetails) && !empty($roleId)) {
                // employee role attempt to create
                // build password for user login
                $password = $this->request->getVar('password');
                $confirm = $this->request->getVar('confirm');

                // build user model data
                $userData = array(
                    "login_email"  => $employeeDetails->email,
                    "login_mobile" => $employeeDetails->phone,
                    "password"     => $password,
                    "confirm"      => $confirm,
                    "slug"         => bin2hex(random_bytes(5)),
                    "role_id"      => $roleId,
                    "status"       => 1
                );

                if ($this->validation->run($userData, 'user')) {
                    // user data is valid
                    // build encrypted password and insert to user model
                    $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
                    $userId = $this->userModel->insert($userData);

                    // build user details model data
                    $userDetailsData = array(
                        "user_id"    => $userId,
                        "first_name" => $employeeDetails->first_name,
                        "last_name"  => $employeeDetails->last_name,
                        "country_id" => $employeeDetails->country_id,
                        "id_type"    => $employeeDetails->id_type,
                        "id_number"  => $employeeDetails->nid,
                        "address"    => $employeeDetails->address,
                        "city"       => $employeeDetails->city,
                        "zip_code"   => $employeeDetails->zip,
                        "image"      => $employeeDetails->nid_picture
                    );

                    if ($this->validation->run($userDetailsData, 'userDetail')) {
                        // user details data is valid
                        // insert to user details model
                        $this->userDetailModel->insert($userDetailsData);
                        goto db_trans_completed;
                    }
                }

                throw new \Exception($this->validation->listErrors());
            } else if (!empty($employeeUserDetails) && !empty($roleId)) {
                // employee role attempt to update
                // process update model
                $this->userModel->save(["id" => $employeeUserDetails->id, "role_id" => $roleId]);
            } else if (!empty($employeeUserDetails) && empty($roleId)) {
                // employee role attempt to delete
                $this->userDetailModel->where('user_id', $employeeUserDetails->id)->delete(null, true);
                $this->userModel->where('id', $employeeUserDetails->id)->delete(null, true);
            }
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        // completed database transaction and return
        db_trans_completed:
        $this->db->transComplete();
        return redirect()->route('view-employee', [$id])->with('success', 'Role data updated !');
    }

    public function delete(int $id)
    {
        // build employee info and login info
        $employeeInfo = $this->employeeModel->find($id);
        $employeeLoginInfo = $this->userModel->where('login_email', $employeeInfo->email)->first();
        // $employeeName = $employeeLoginInfo->

        try {
            // delete data from all relative tables
            if (!empty($employeeLoginInfo)) {
                $this->userDetailModel->where('user_id', $employeeLoginInfo->id)->delete();
                $this->userModel->where('id', $employeeLoginInfo->id)->delete();
            }

            $this->employeeModel->delete($id);
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        return redirect()->route('index-employee')->with("fail", "Employee: {$employeeInfo->last_name} deleted");
    }

    public function restore(int $id)
    {
        // build employee info and login info
        $employeeInfo = $this->employeeModel->withDeleted()->find($id);
        $employeeLoginInfo = $this->userModel->withDeleted()->where('login_email', $employeeInfo->email)->first();

        try {
            // delete data from all relative tables
            if (!empty($employeeLoginInfo)) {
                $this->userDetailModel->where('user_id', $employeeLoginInfo->id)->set('deleted_at', null)->update();
                $this->userModel->where('id', $employeeLoginInfo->id)->set('deleted_at', null)->update();
            }

            $this->employeeModel->set('deleted_at', null)->update($id);
        } catch (\Throwable $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }

        return redirect()->route('trash-index-employee')->with("success", "Employee: {$employeeInfo->last_name} restored");
    }

    public function imgaeCheck($image)
    {
        $newName = $image->getRandomName();
        $path = 'image/employee';
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }
}
