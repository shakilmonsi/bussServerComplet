<?php

namespace Modules\Location\Controllers;

use App\Controllers\BaseController;
use Modules\Location\Models\LocationModel;

use App\Libraries\Rolepermission;

class Location extends BaseController
{
	private $Viewpath;
	protected $locationModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Location\Views";
		$this->locationModel = new LocationModel();
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.location") ; 
		$data['title']  =    lang("Localize.add_location") ;

		$data['pageheading'] = lang("Localize.add_location");
		
		echo view($this->Viewpath.'\location/new',$data);
	}

	public function create()
	{
		
		
		$data= array(
			"name"=> $this->request->getVar('name'),
		);
	
		
		if($this->validation->run($data, 'location'))
		{
			
			$this->locationModel->insert($data);
			return redirect()->route('index-location')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.location") ; 
			$data['title']  =    lang("Localize.location_list") ;

			$data['pageheading'] = lang("Localize.add_location");

			echo view($this->Viewpath.'\location/new',$data);

		}
		// 
	}

	public function index()
	{
		$data['location'] = $this->locationModel->orderBy('id', 'DESC')->findAll();

		$data['module'] =    lang("Localize.location") ; 
		$data['title']  =    lang("Localize.location_list") ;

		$data['pageheading'] = lang("Localize.location_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_location";
        $list_data = "location_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\location/index',$data);
	}

	public function edit($id)
	{
		$data['location'] = $this->locationModel->find($id);

		$data['module'] =    lang("Localize.location") ; 
		$data['title']  =    lang("Localize.location_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.location");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\location/edit',$data);
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

		if($this->validation->run($validdata, 'location'))
		{
			$this->locationModel->save($data);
			return redirect()->route('index-location')->with("success","Data Update");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;
			$data['location'] = $this->locationModel->find($id);

			$data['module'] =    lang("Localize.location") ; 
			$data['title']  =    lang("Localize.location_list") ;

			$heading = lang("Localize.edit").' '.lang("Localize.location");
			$data['pageheading'] = $heading;

			echo view($this->Viewpath.'\location/edit',$data);

		}
	}


	public function delete($id)
	{

		$this->locationModel->delete($id);
		return redirect()->route('index-location')->with("fail","Data Deleted");
	
	}
}
