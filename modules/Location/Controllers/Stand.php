<?php

namespace Modules\Location\Controllers;

use App\Controllers\BaseController;
use Modules\Location\Models\StandModel;
use App\Libraries\Rolepermission;

class Stand extends BaseController
{
	private $Viewpath;
	protected $standModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Location\Views";
		$this->standModel = new StandModel();
      
    }


	public function new()
	{
	
		$data['module'] =    lang("Localize.location") ; 
		$data['title']  =    lang("Localize.add_stand") ;

		$data['pageheading'] = lang("Localize.add_stand");

		echo view($this->Viewpath.'\stand/new',$data);
	}


	public function create()
	{
		
		
		$data= array(
			"name"=> $this->request->getVar('name'),
		);
	
		
		if($this->validation->run($data, 'stand'))
		{
			$this->standModel->insert($data);
			return redirect()->route('index-stand')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.location") ; 
			$data['title']  =    lang("Localize.stand_list") ;

			$data['pageheading'] = lang("Localize.add_stand");

			echo view($this->Viewpath.'\stand/new',$data);

		}
		
	}

	public function index()
	{
		$data['stand'] = $this->standModel->orderBy('id', 'DESC')->findAll();

		$data['module'] =    lang("Localize.location") ; 
		$data['title']  =    lang("Localize.stand_list") ;

		$data['pageheading'] = lang("Localize.stand_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_stand";
        $list_data = "stand_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\stand/index',$data);
	}


	public function edit($id)
	{
		$data['stand'] = $this->standModel->find($id);

		$data['module'] =    lang("Localize.location") ; 
		$data['title']  =    lang("Localize.stand_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.stand");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\stand/edit',$data);
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

		if($this->validation->run($validdata, 'stand'))
		{
			$this->standModel->save($data);
			return redirect()->route('index-stand')->with("success","Data Update");
		}
		
		else
		{
			$data['validation'] = $this->validation;
			$data['stand'] = $this->standModel->find($id);

			$data['module'] =    lang("Localize.location") ; 
			$data['title']  =    lang("Localize.stand_list") ;

			$heading = lang("Localize.edit").' '.lang("Localize.stand");
			$data['pageheading'] = $heading;

			echo view($this->Viewpath.'\stand/edit',$data);

		}
	}


	public function delete($id)
	{

		$this->standModel->delete($id);
		return redirect()->route('index-stand')->with("fail","Data Deleted");
	
	}
}
