<?php

namespace App\Libraries;
use Modules\Role\Models\MenuModel;
use phpDocumentor\Reflection\Types\Null_;

Class AdminMenu
{
    protected $menuModel;

    public function __construct()
    {
		$this->menuModel = new MenuModel();
		
      
    }

    public function getMenuName($id)
    {
        $getName = $this->menuModel->find($id);
        if (empty($getName)) {
            $name  = '';
        }
        else{
            $name = $getName->menu_title;
        }
        
       
        
        return $name;
    }

}