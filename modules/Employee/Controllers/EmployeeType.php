<?php

namespace Modules\Employee\Controllers;

use App\Controllers\BaseController;
use Modules\Employee\Models\EmployeeTypeModel;
use App\Libraries\Rolepermission;

class EmployeeType extends BaseController
{
	protected $Viewpath;
	protected $employeeTypeModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Employee\Views";
		$this->employeeTypeModel = new EmployeeTypeModel();
		
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.employee") ; 
		$data['title']  =    lang("Localize.add_employee_type") ;

		$data['pageheading'] = lang("Localize.add_employee_type");

		echo view($this->Viewpath.'\employeetype/new',$data);
	}

	public function create()
	{
		
		$data= array(
			"type"=> $this->request->getVar('type'),
			"detail"=> $this->request->getVar('detail'),
		);

		if($this->validation->run($data, 'employeetype'))
		{
			$this->employeeTypeModel->insert($data);
			return redirect()->route('index-employeetype')->with("success","Data Save");
		}
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.employee") ; 
			$data['title']  =    lang("Localize.employee_type_list") ;

			echo view($this->Viewpath.'\employeetype/new',$data);

		}
		// 
	}

	public function index()
	{
		$data['employeetype'] = $this->employeeTypeModel->findAll();

		$data['module'] =    lang("Localize.employee") ; 
		$data['title']  =    lang("Localize.employee_type_list") ;

		$data['pageheading'] = lang("Localize.employee_type_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_employee_type";
        $list_data = "employee_type_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\employeetype/index',$data);
	}

	public function edit($id)
	{
		$data['employeetype'] = $this->employeeTypeModel->find($id);

		$data['module'] =    lang("Localize.employee") ; 
		$data['title']  =    lang("Localize.employee_type_list") ;

		$heading = lang("Localize.employee").' '.lang("Localize.edit");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\employeetype/edit',$data);
	}


	public function update($id)
	{
		$validdata= array(
			"type"=> $this->request->getVar('type'),
			"detail"=> $this->request->getVar('detail'),
		);
		$data= array(

			"id"=>$id,
			"type"=> $this->request->getVar('type'),
			"detail"=> $this->request->getVar('detail'),
		);

		if($this->validation->run($validdata, 'employeetype'))
		{
			$this->employeeTypeModel->save($data);
			return redirect()->route('index-employeetype')->with("success","Data Updated");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.employee") ; 
			$data['title']  =    lang("Localize.employee_type_list") ;
			
			echo view($this->Viewpath.'\employeetype/edit',$data);

		}
	}


	public function delete($id)
	{
		
		$this->employeeTypeModel->delete($id);
		return redirect()->route('index-employeetype')->with("fail","Data Deleted");
	
	}


}
