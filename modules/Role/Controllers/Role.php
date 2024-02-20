<?php

namespace Modules\Role\Controllers;

use App\Controllers\BaseController;
use Modules\Role\Models\RoleModel;
use App\Libraries\Rolepermission;
use Modules\Role\Models\MenuModel;
use Modules\Role\Models\PermissionModel;


class Role extends BaseController
{
    protected $Viewpath;
    protected $roleModel;
    protected $menuModel;
    protected $db;
    protected $permissionModel;

    public function __construct()
    {

        $this->Viewpath = "Modules\Role\Views";
        $this->roleModel = new RoleModel();
        $this->menuModel = new MenuModel();
        $this->permissionModel = new PermissionModel();
        $this->db = \Config\Database::connect();
    }

    public function new()
    {
        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.add_role");

        $data['pageheading'] = lang("Localize.add_role");

        echo view($this->Viewpath . '\role/new', $data);
    }

    public function create()
    {
        $data = array(
            "name" => $this->request->getVar('name'),
            "status" => $this->request->getVar('status'),
        );

        if ($this->validation->run($data, 'role')) {
            $userRole =  $this->roleModel->insert($data);
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

            $checkData =  $this->permissionModel->where('role_id', $userRole)->findAll();
            if (!empty($checkData)) {
                foreach ($checkData as $key => $delvalue) {
                    $this->permissionModel->delete($delvalue->id, true);
                }
            }
            $this->permissionModel->insertBatch($valueArray);

            return redirect()->route('index-role')->with("success", "Data Save");
        }
        
        return redirect()->back()->with('fail', $this->validation->listErrors());
    }

    public function index()
    {
        $data['role'] = $this->roleModel->findAll();

        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.role_list");
        $data['pageheading'] = lang("Localize.role_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_role";
        $list_data = "role_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);
        echo view($this->Viewpath . '\role/index', $data);
    }


    public function edit($id)
    {
        $data['role'] = $this->roleModel->find($id);

        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.role_list");

        $heading = lang("Localize.edit") . ' ' . lang("Localize.role");
        $data['pageheading'] = $heading;

        echo view($this->Viewpath . '\role\edit', $data);
    }

    public function update($id)
    {
        $data = array(
            "id" => $id,
            "name" => $this->request->getVar('name'),
            "status" => $this->request->getVar('status'),
        );

        if ($this->validation->run($data, 'role')) {
            $this->roleModel->save($data);
            return redirect()->route('index-role')->with("success", "Data Update");
        }

        return redirect()->back()->with('fail', $this->validation->listErrors());
    }

    public function delete($id)
    {
        $this->roleModel->delete($id);
        return redirect()->route('index-role')->with("fail", "Data Deleted");
    }
}
