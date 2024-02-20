<?php

namespace Modules\Trip\Controllers;

use App\Controllers\BaseController;
use Modules\Trip\Models\FacilityModel;
use App\Libraries\Rolepermission;

class Facility extends BaseController
{
	private $Viewpath;
	protected $facilityModel;
	
	public function __construct()
    {

		$this->Viewpath = "Modules\Trip\Views";
		$this->facilityModel = new FacilityModel();
      
    }

	public function index()
	{
		$data['facility'] = $this->facilityModel->orderBy('id', 'DESC')->findAll();

		$data['module'] =    lang("Localize.trip") ; 
		$data['title']  =    lang("Localize.facility_list") ;

		$data['pageheading'] = lang("Localize.facility_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_facility";
        $list_data = "facility_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\facility/index',$data);
	}


	public function new()
	{
		$data['module'] =    lang("Localize.trip") ; 
		$data['title']  =    lang("Localize.add_facility") ;

		$data['pageheading'] = lang("Localize.add_facility");

		echo view($this->Viewpath.'\facility/new',$data);
	}


	public function create()
	{
		
		
		$data= array(
			"name"=> $this->request->getVar('name'),
		);
	
		
		if($this->validation->run($data, 'facility'))
		{
			
			$this->facilityModel->insert($data);
			return redirect()->route('index-facility')->with("success","Data Save");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.trip") ; 
			$data['title']  =    lang("Localize.add_facility") ;
			$data['validation'] = $this->validation;
			$data['pageheading'] = lang("Localize.add_facility");
			echo view($this->Viewpath.'\facility/new',$data);

		}
		
	}
	


	public function edit($id)
	{
		$data['facility'] = $this->facilityModel->find($id);

		$data['module'] =    lang("Localize.trip") ; 
		$data['title']  =    lang("Localize.facility_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.facility");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\facility/edit',$data);
	}

	public function update($id)
	{
		$validdata= array(
			"name"=> $this->request->getVar('name'),
		);
		$data= array(
			"id"=> $id,
			"name"=> $this->request->getVar('name'),
		);

		if($this->validation->run($validdata, 'facility'))
		{
			$this->facilityModel->save($data);
			return redirect()->route('index-facility')->with("success","Data Update");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.trip") ; 
			$data['title']  =    lang("Localize.facility_list") ;

			$heading = lang("Localize.edit").' '.lang("Localize.facility");
			$data['pageheading'] = $heading;


			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\facility/edit',$data);

		}
	}

	public function delete($id)
	{

		$this->facilityModel->delete($id);
		return redirect()->route('index-facility')->with("fail","Data Deleted");
	
	}
}
