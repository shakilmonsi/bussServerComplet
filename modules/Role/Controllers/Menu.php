<?php

namespace Modules\Role\Controllers;

use App\Controllers\BaseController;
use Modules\Role\Models\MenuModel;
use App\Libraries\Rolepermission;

class Menu extends BaseController
{
    protected $Viewpath;
    protected $menuModel;

    public function __construct()
    {
        $this->Viewpath = "Modules\Role\Views";
        $this->menuModel = new MenuModel();
    }

    public function new()
    {
        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.add_menu");

        $data['pageheading'] = lang("Localize.add_menu");

        $data['parentmenu'] = $this->menuModel->orderBy('id', 'DESC')->findAll();
        echo view($this->Viewpath . '\menu/new', $data);
    }

    public function create()
    {
        $inserData = array(
            "menu_title" => $this->request->getVar('menu_title'),
            "page_url" => $this->request->getVar('page_url'),
            "module_name" => $this->request->getVar('module_name'),
            "created_by" => $this->session->get('user_id'),
            "parent_menu_id" => $this->request->getVar('parent_menu_id'),

        );

        if ($this->validation->run($inserData, 'menu')) {
            $this->menuModel->insert($inserData);

            $parentMenuId = $this->request->getVar('parent_menu_id');

            if (!empty($parentMenuId)) {
                $updateData = array(
                    "have_chield" => 1,
                    "id" => $parentMenuId,
                );
                $this->menuModel->save($updateData);
            }

            return redirect()->route('index-menu')->with("success", "Data Save");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function index()
    {
        $data['menu'] = $this->menuModel->orderBy('id', 'DESC')->findAll();

        $data['module'] =    lang("Localize.role");
        $data['title']  =    lang("Localize.menu_list");
        $data['pageheading'] = lang("Localize.menu_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_menu";
        $list_data = "menu_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

        echo view($this->Viewpath . '\menu/index', $data);
    }

    public function edit($id)
    {
        $data['menu'] = $this->menuModel->find($id);
        $data['parentmenu'] = $this->menuModel->orderBy('id', 'DESC')->findAll();
        $heading = lang("Localize.edit") . ' ' . lang("Localize.menu");
        $data['pageheading'] = $heading;
        echo view($this->Viewpath . '\menu/edit', $data);
    }


    public function update($id)
    {
        $updateData = array(
            "id" => $id,
            "menu_title" => $this->request->getVar('menu_title'),
            "page_url" => $this->request->getVar('page_url'),
            "module_name" => $this->request->getVar('module_name'),
            "created_by" => $this->session->get('user_id'),
            "parent_menu_id" => $this->request->getVar('parent_menu_id'),

        );

        if ($this->validation->run($updateData, 'menu')) {
            $this->menuModel->save($updateData);

            $parentMenuId = $this->request->getVar('parent_menu_id');

            if (!empty($parentMenuId)) {
                $updateData = array(
                    "have_chield" => 1,
                    "id" => $parentMenuId,
                );
                $this->menuModel->save($updateData);
            }

            return redirect()->route('index-menu')->with("success", "Data Update");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->route('index-menu')->with("fail", "Data Deleted");
    }
}
