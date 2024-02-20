<?php

namespace Modules\Role\Controllers;

use App\Controllers\BaseController;
use Modules\Role\Models\MenuModel;
use Modules\Role\Models\PermissionModel;
use Modules\Role\Models\RoleModel;
use App\Libraries\Rolepermission;

class Permission extends BaseController
{
    protected $Viewpath;
    protected $menuModel;
    protected $permissionModel;
    protected $roleModel;
    protected $db;

    public function __construct()
    {

        $this->Viewpath = "Modules\Role\Views";
        $this->menuModel = new MenuModel();
        $this->permissionModel = new PermissionModel();
        $this->roleModel = new RoleModel();
        $this->db = \Config\Database::connect();
    }

    function new()
    {
        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.add_permission");

        $data['role'] = $this->roleModel->whereNotIn('id', [1, 3])->findAll();

        $data['permissionmodule'] = $this->menuModel
            ->select('MIN(id) AS id, module_name')
            ->orderBy('id', 'ASC')
            ->groupBy("module_name")
            ->findAll();

        $data['pageheading'] = lang("Localize.add_permission");
        echo view($this->Viewpath . '\permission\new', $data);
    }

    public function create()
    {
        $userRole = $this->request->getVar("role_id");

        $matchArray = [1, 2, 3, 4];


        $insertArray = array(
            "create" => 1,
            "read" => 1,
            "edit" => 1,
            "delete" => 1,
        );

        $userId = $this->session->get('user_id');
        //_________________________//
        //    1 = create
        //    2 = read
        //    3 = edit
        //    4 = delete
        //_________________________//
        $valueArray = array();

        $menuTitle = $this->menuModel->findAll();
        foreach ($menuTitle as $key => $menuvalue) {

            $permissionvalue = $this->request->getVar($menuvalue->menu_title);

            if (!empty($permissionvalue)) {

                $result = array_diff($matchArray, $permissionvalue);

                if (!empty($result)) {

                    foreach ($result as $resultvalue) {

                        if ($resultvalue == 1) {
                            $insertArray['create'] = 0;
                        }
                        if ($resultvalue == 2) {
                            $insertArray['read'] = 0;
                        }
                        if ($resultvalue == 3) {
                            $insertArray['edit'] = 0;
                        }
                        if ($resultvalue == 4) {
                            $insertArray['delete'] = 0;
                        }
                    }
                } else {

                    $insertArray = array(
                        "create" => 1,
                        "read" => 1,
                        "edit" => 1,
                        "delete" => 1,
                    );
                }
            } else {
                $insertArray = array(
                    "create" => 0,
                    "read" => 0,
                    "edit" => 0,
                    "delete" => 0,
                );
            }

            $insertArray['role_id'] = $userRole;
            $insertArray['user_id'] = $userId;
            $insertArray['menu_id'] = $menuvalue->id;
            $insertArray['menu_title'] = $menuvalue->menu_title;

            $valueArray[$key] = $insertArray;

            $insertArray = array();

            $insertArray = array(
                "create" => 1,
                "read" => 1,
                "edit" => 1,
                "delete" => 1,
            );
        }

        $validate =  array(
            "user_id" => $userRole,
            "role_id" => $userRole
        );


        if ($this->validation->run($validate, 'rolepermission')) {
            $checkData =  $this->permissionModel->where('role_id', $userRole)->findAll();
            if (!empty($checkData)) {
                foreach ($checkData as $key => $delvalue) {
                    $this->permissionModel->delete($delvalue->id, true);
                }
            }
            $this->permissionModel->insertBatch($valueArray);
            return redirect()->route('index-permission')->with("success", "Data Save");
        } else {
            $data['module'] =    lang("Localize.role");
            $data['title']  =    lang("Localize.permission_list");

            $data['pageheading'] = lang("Localize.add_permission");

            $data['role'] = $this->roleModel->orderBy('id', 'DESC')->findAll();
            $data['module'] = $this->menuModel->orderBy('id', 'ASC')->groupBy("module_name")->findAll();
            $data['validation'] = $this->validation;
            echo view($this->Viewpath . '\permission/new', $data);
        }
    }


    public function index()
    {
        $data['role'] = $this->permissionModel
            // select columns
            ->select('MAX(roles.name) AS name, permissions.role_id')

            // join permission with role columns
            ->join('roles', 'roles.id = permissions.role_id')

            // ignore super admin and passanger permission
            ->whereNotIn('permissions.role_id', [1, 3])

            // group role ids and get rows
            ->groupBy("permissions.role_id")
            ->findAll();


        // module tile
        // and page heading
        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.permission_list");
        $data['pageheading'] = lang("Localize.permission_list");

        // check permissions
        $rolepermissionLibrary = new Rolepermission();
        $data['add_data'] = $rolepermissionLibrary->create("add_permission");
        $data['edit_data'] = $rolepermissionLibrary->edit("permission_list");
        $data['delete_data'] = $rolepermissionLibrary->delete("permission_list");

        return view($this->Viewpath . '\permission\index', $data);
    }

    public function edit($id)
    {
        $data['getrole'] = $id;
        $data['role'] = $this->roleModel->find($id)->name;
        $data['role_id'] = $this->roleModel->find($id)->id;

        $data['permissionmodule'] = $this->menuModel
            ->select('MIN(id) AS id, module_name')
            ->orderBy('id', 'ASC')
            ->groupBy("module_name")
            ->findAll();

        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.permission_list");

        $heading = lang("Localize.edit") . ' ' . lang("Localize.permission");
        $data['pageheading'] = $heading;

        return view($this->Viewpath . '\permission\edit', $data);
    }

    public function update($id)
    {
        $userRole = $this->request->getVar("role_id");
        $matchArray = [1, 2, 3, 4];


        $insertArray = array(
            "create" => 1,
            "read" => 1,
            "edit" => 1,
            "delete" => 1,
        );

        $userId = $this->session->get('user_id');
        //_________________________//
        //    1 = create
        //    2 = read
        //    3 = edit
        //    4 = delete
        //_________________________//
        $valueArray = array();

        $menuTitle = $this->menuModel->findAll();
        foreach ($menuTitle as $key => $menuvalue) {

            $permissionvalue = $this->request->getVar($menuvalue->menu_title);



            if (!empty($permissionvalue)) {

                $result = array_diff($matchArray, $permissionvalue);

                if (!empty($result)) {

                    foreach ($result as $resultvalue) {

                        if ($resultvalue == 1) {
                            $insertArray['create'] = 0;
                        }
                        if ($resultvalue == 2) {
                            $insertArray['read'] = 0;
                        }
                        if ($resultvalue == 3) {
                            $insertArray['edit'] = 0;
                        }
                        if ($resultvalue == 4) {
                            $insertArray['delete'] = 0;
                        }
                    }
                } else {

                    $insertArray = array(
                        "create" => 1,
                        "read" => 1,
                        "edit" => 1,
                        "delete" => 1,
                    );
                }
            } else {
                $insertArray = array(
                    "create" => 0,
                    "read" => 0,
                    "edit" => 0,
                    "delete" => 0,
                );
            }

            $insertArray['role_id'] = $userRole;
            $insertArray['user_id'] = $userId;
            $insertArray['menu_id'] = $menuvalue->id;
            $insertArray['menu_title'] = $menuvalue->menu_title;

            $valueArray[$key] = $insertArray;

            $insertArray = array();

            $insertArray = array(
                "create" => 1,
                "read" => 1,
                "edit" => 1,
                "delete" => 1,
            );
        }

        $validate =  array(
            "user_id" => $userRole,
            "role_id" => $userRole
        );


        if ($this->validation->run($validate, 'rolepermission')) {
            $UpdatecheckData =  $this->permissionModel->where('role_id', $id)->findAll();
            if (!empty($UpdatecheckData)) {
                foreach ($UpdatecheckData as $key => $checkdelvalue) {
                    $this->permissionModel->delete($checkdelvalue->id, true);
                }
            }

            $checkData =  $this->permissionModel->where('role_id', $userRole)->findAll();
            if (!empty($checkData)) {
                foreach ($checkData as $key => $delvalue) {
                    $this->permissionModel->delete($delvalue->id, true);
                }
            }

            $this->permissionModel->insertBatch($valueArray);
            return redirect()->route('index-permission')->with("success", "Data Save");
        }

        return redirect()->back()->with('fail', $this->validation->listErrors());
    }
}
