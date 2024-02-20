<?php

namespace Modules\Add\Controllers;

use App\Controllers\BaseController;
use Modules\Add\Models\AddModel;
use App\Libraries\Rolepermission;

class Add extends BaseController
{
	protected $Viewpath;
	protected $addModel;
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Add\Views";
		$this->addModel = new AddModel();
		$this->db      = \Config\Database::connect();
      
    }


	public function new()
	{
		$totalrow = $this->addModel->countAll();
		if ($totalrow >= 3) {
			
			return redirect()->route('index-add')->with("fail","You can not add more than 3 advertisement");
		}

		$data['module'] =    lang("Localize.advertisement") ; 
		$data['title']  =    lang("Localize.add_advertisement") ;

		$data['pageheading'] = lang("Localize.add_advertisement");
		
		echo view($this->Viewpath.'\add/new',$data);
	}


	public function create()
	{
		$path = 'image/add';

		$add = '';
	

		$addimage =  $this->request->getFile('image_path');
		

		if ($addimage->isValid() && ! $addimage->hasMoved() ) {
			$add	 = $this->imgaeCheck($addimage,$path);
		}
		
		


		$validatedata= array(
			"link"=> $this->request->getVar('link'),
			"pagename"=> $this->request->getVar('pagename'),
		);

		
		$data= array(
			"link"=> $this->request->getVar('link'),
			"image_path"=> $add,
			"pagename"=> $this->request->getVar('pagename'),
			
		);


		if($this->validation->run($validatedata, 'add'))
		{
			
			$this->addModel->insert($data);
			return redirect()->route('index-add')->with("success","Data Save");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.advertisement") ; 
			$data['title']  =    lang("Localize.add_advertisement") ;
			$data['pageheading'] = lang("Localize.add_advertisement");
			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\add/new',$data);

		}
		


	}


	public function update($id)
	{
		$path = 'image/add';

		$add = '';
	

		$addimage =  $this->request->getFile('image_path');
		

		if ($addimage->isValid() && ! $addimage->hasMoved() ) {
			$add	 = $this->imgaeCheck($addimage,$path);
		}

		else
		{
			$add= $this->request->getVar('oldadd');
		}
		
		


		$validatedata= array(
			"link"=> $this->request->getVar('link'),
			"pagename"=> $this->request->getVar('pagename'),
		);

		
		$data= array(
			"id"=> $id,
			"link"=> $this->request->getVar('link'),
			"image_path"=> $add,
			"pagename"=> $this->request->getVar('pagename'),
			
		);


		if($this->validation->run($validatedata, 'add'))
		{
			
			$this->addModel->save($data);
			return redirect()->route('index-add')->with("success","Data Save");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.advertisement") ; 
			$data['title']  =    lang("Localize.add_advertisement") ;
			$data['validation'] = $this->validation;
			$data['add'] = $this->addModel->find($id);
			$heading = lang("Localize.edit").' '.lang("Localize.advertisement");
			$data['pageheading'] = $heading;
			echo view($this->Viewpath.'\add/edit',$data);

		}
		


	}

	public function index()
	{
		$data['module'] =    lang("Localize.advertisement") ; 
		$data['title']  =    lang("Localize.advertisement_list") ;
		$data['add']  = $this->addModel->findAll();
		$data['pageheading'] = lang("Localize.advertisement_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_advertisement";
        $list_data = "advertisement_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\add/index',$data);
	}

	public function edit($id)
	{
		$data['module'] =    lang("Localize.advertisement") ; 
		$data['title']  =    lang("Localize.advertisement_list") ;
		$data['add'] = $this->addModel->find($id);

		$heading = lang("Localize.edit").' '.lang("Localize.advertisement");
		$data['pageheading'] = $heading;
		echo view($this->Viewpath.'\add/edit',$data);
	}


	public function delete($id)
	{

		$imgpath = $this->addModel->find($id);
		$imgpath = $imgpath->image_path;
		
		if (file_exists($imgpath)) {
			unlink($imgpath);
		}

		$this->addModel->delete($id,true);
		return redirect()->route('index-add')->with("fail","Data Deleted");
	
	}


	public function imgaeCheck($image,$path)
	{
		$newName = $image->getRandomName();
		$path = $path;
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}
}
