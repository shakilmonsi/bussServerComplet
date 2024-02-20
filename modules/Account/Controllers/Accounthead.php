<?php

namespace Modules\Account\Controllers;

use App\Controllers\BaseController;

class Accounthead extends BaseController
{
	public function __construct()
    {

        $this->Viewpath = "Modules\Account\Views";
		
      
    }

	public function index()
	{
		echo view($this->Viewpath.'\account/index');
	}
}
