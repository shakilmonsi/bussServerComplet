<?php

namespace App\Libraries;

use Modules\Role\Models\MenuModel;
use Modules\Role\Models\RoleModel;
use Modules\Role\Models\PermissionModel;

class Permission

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

    public function menuPermissionTable($menuid)
    {
        $getMenuStatus = $this->menuModel->find($menuid);

        if ($getMenuStatus->have_chield == 1) {
            $sendData['menudetail'] = $this->menuModel->where('parent_menu_id', $getMenuStatus->id)->findAll();
            $sendData['mainmenudetail'] = $getMenuStatus;
            return view('permission/permissiontable', $sendData);
        } else {
            $sendData['menudetail'] = [$getMenuStatus];
            return view('permission/permissiontable', $sendData);
        }
    }

    public function callBackPermission($menuID)
    {
        $getMenuStatus = $this->menuModel->find($menuID);
        $sendData['menudetail'] = $this->menuModel->where('parent_menu_id', $menuID)->findAll();
        $sendData['mainmenudetail'] = $getMenuStatus;
        return view('permission/permissionsingletable', $sendData);
    }

    public function editMenuPermissionTable($menuid, $roleid)
    {
        $sendData['editData'] = $this->permissionModel->where('role_id', $roleid)->findAll();
        $sendData['roleid'] = $roleid;
        $getMenuStatus = $this->menuModel->find($menuid);

        if ($getMenuStatus->have_chield == 1) {
            $sendData['menudetail'] = $this->menuModel->where('parent_menu_id', $getMenuStatus->id)->findAll();
            $sendData['mainmenudetail'] = $getMenuStatus;
            return view('permission/editpermissiontable', $sendData);
        } else {
            $sendData['menudetail'] = [$getMenuStatus];
            return view('permission/editpermissiontable', $sendData);
        }
    }

    public function editcallBackPermission($menuid, $roleid)
    {
        $getMenuStatus = $this->menuModel->find($menuid);
        $sendData['editData'] = $this->permissionModel->where('role_id', $roleid)->findAll();
        $sendData['roleid'] = $roleid;
        $sendData['menudetail'] = $this->menuModel->where('parent_menu_id', $menuid)->findAll();
        $sendData['mainmenudetail'] = $getMenuStatus;
        return  view('permission/editpermissionsingletable', $sendData);
    }
}
