<?php

namespace App\Libraries;

use Modules\Role\Models\PermissionModel;
use Modules\Role\Models\MenuModel;

class Rolepermission
{
    static $MENU_CHART = array();
    static $ROLEPERMISSION_CHART = array();
    static $MENU_ROLEPERMISSION_CHART = array();

    protected $db;
    protected $permissionModel;
    protected $menuModel;
    protected $librarysession;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->menuModel = new MenuModel();
        $this->librarysession = session();
        $this->permissionModel = new PermissionModel();

        $this->buildMenuChart();
        $this->buildRolePermissionChart();
        $this->buildMenuRolePermissionChart();
    }

    private function buildMenuChart()
    {
        if (!static::$MENU_CHART) {
            $allMenus = $this->menuModel
                ->select('id, menu_title, parent_menu_id, have_chield')
                ->findAll();

            static::$MENU_CHART = array_combine(array_column($allMenus, 'menu_title'), $allMenus);
        }
    }

    private function buildRolePermissionChart()
    {
        if (!static::$ROLEPERMISSION_CHART) {
            $allPermissions = $this->permissionModel
                ->select('menu_title, create, read, edit, delete')
                ->where('role_id', $this->librarysession->role_id)
                ->findAll();

            static::$ROLEPERMISSION_CHART = array_combine(array_column($allPermissions, 'menu_title'), $allPermissions);
        }
    }

    public function buildMenuRolePermissionChart()
    {
        if (!static::$MENU_ROLEPERMISSION_CHART) {
            $menuWithPermissions = $this->db->query(
                <<<SQL
                SELECT
                    m.menu_title
                FROM
                    menus AS m
                LEFT JOIN permissions AS p ON
                    m.id = p.menu_id
                WHERE
                    m.have_chield = 1
                    AND p.role_id = ?
                    AND EXISTS (
                        SELECT
                            1
                        FROM
                            menus AS sub
                        JOIN permissions AS sub_perm ON
                            sub.id = sub_perm.menu_id
                        WHERE
                            sub.parent_menu_id = m.id
                            AND (
                                sub_perm.`create` = 1
                                OR sub_perm.`read` = 1
                                OR sub_perm.`edit` = 1
                                OR sub_perm.`delete` = 1
                            )
                            AND sub_perm.role_id = ?
                    )
                ORDER BY
                    m.id;
                SQL,
                [$this->librarysession->role_id, $this->librarysession->role_id]
            )->getResultArray();

            static::$MENU_ROLEPERMISSION_CHART = array_flip(array_column($menuWithPermissions, 'menu_title'));
        }
    }

    public function menu($menuKey)
    {
        return isset(static::$MENU_ROLEPERMISSION_CHART[$menuKey]);

        $menuChart = static::$MENU_CHART;

        if ($menuInfo = $menuChart[$menuKey] ?? null) {
            // menu name exists
            // check role for menu name

            if ($menuRoleInfo = static::$ROLEPERMISSION_CHART[$menuKey] ?? null) {
                // role data exists for menu name
                if ($menuRoleInfo->create || $menuRoleInfo->read || $menuRoleInfo->edit || $menuRoleInfo->delete) {
                    // role assigned in mainmenu
                    return true;
                }
            }

            // main menu role not true
            // check if role exists in submenu
            if ($menuInfo->have_chield) {
                // sub menu exits
                // build all sub menus from menuchart
                $subIdsArr = array_filter($menuChart, fn ($value) => $value->parent_menu_id == $menuInfo->id);

                foreach ($subIdsArr as $chKey => $childId) {
                    // check submenu role
                    if ($childRoleInfo = static::$ROLEPERMISSION_CHART[$chKey] ?? null) {
                        // role data exists for sub menu
                        if ($childRoleInfo->create || $childRoleInfo->read || $childRoleInfo->edit || $childRoleInfo->delete) {
                            // role assigned in submenu
                            return true;
                        }
                    }

                    // sub menu role not true
                    // check if role exists in sub sub menu 
                    if ($childId->have_chield) {
                        // sub sub menu exits
                        // build all sub sub menus from menuchart
                        $subSubIdsArr = array_filter($menuChart, fn ($value) => $value->parent_menu_id == $childId->id);

                        foreach ($subSubIdsArr as $subKey => $subId) {
                            // check sub sub menu role
                            if ($subIdRoleInfo = static::$ROLEPERMISSION_CHART[$subKey] ?? null) {
                                // role data exists for sub sub menu
                                if ($subIdRoleInfo->create || $subIdRoleInfo->read || $subIdRoleInfo->edit || $subIdRoleInfo->delete) {
                                    // role assigned in submenu
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }

        return false;
    }

    public function read($value): bool
    {
        return static::$ROLEPERMISSION_CHART[$value]->read ?? false;
    }

    public function create($value)
    {
        return static::$ROLEPERMISSION_CHART[$value]->create ?? false;
    }

    public function edit($value)
    {
        return static::$ROLEPERMISSION_CHART[$value]->edit ?? false;
    }

    public function delete($value)
    {
        return static::$ROLEPERMISSION_CHART[$value]->delete ?? false;
    }
}
