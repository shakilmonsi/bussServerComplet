<?php

namespace Modules\Website\Controllers;

use App\Controllers\BaseController;
use Modules\Website\Models\SocialmediaModel;
use App\Libraries\Rolepermission;

class Socialmedia extends BaseController
{

	protected $Viewpath;
	protected $socialModel;
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Website\Views";
		$this->socialModel = new SocialmediaModel();
		$this->db      = \Config\Database::connect();
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.website_setting") ; 
		$data['title']  =    lang("Localize.add_social_media") ;
		$data['pageheading'] = lang("Localize.add_social_media");

		echo view($this->Viewpath.'\socialmedia/new',$data);
	}


	public function create()
	{
		$path = 'image/social';

		$logosocial = '';
	

		$social =  $this->request->getFile('image_path');
		

		if ($social->isValid() && ! $social->hasMoved() ) {
			$logosocial	 = $this->imgaeCheck($social,$path);
		}
		
		


		$validatedata= array(
			"link"=> $this->request->getVar('link'),
		);

		
		$data= array(
			"link"=> $this->request->getVar('link'),
			"image_path"=> $logosocial,
			
		);


		if($this->validation->run($validatedata, 'socialmedia'))
		{
			
			$this->socialModel->insert($data);
			return redirect()->route('index-socialmedia')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['pageheading'] = lang("Localize.add_social_media");

			$data['module'] =    lang("Localize.website_setting") ; 
			$data['title']  =    lang("Localize.add_social_media") ;

			echo view($this->Viewpath.'\socialmedia/new',$data);

		}
		


	}


	public function index()
	{
		$data['module'] =    lang("Localize.website_setting") ; 
		$data['title']  =    lang("Localize.social_media_list") ;

		$data['pageheading'] = lang("Localize.social_media_list");

		$data['social']  = $this->socialModel->findAll();

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_social_media";
        $list_data = "social_media_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\socialmedia/index',$data);
	}

	public function edit($id)
	{
		$data['social'] = $this->socialModel->find($id);

		$data['module'] =    lang("Localize.website_setting") ; 
		$data['title']  =    lang("Localize.social_media_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.social_media");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\socialmedia/edit',$data);
	}


	public function update($id)
	{
		$path = 'image/social';

		$logosocial = '';
	

		$social =  $this->request->getFile('image_path');
		

		if ($social->isValid() && ! $social->hasMoved() ) {
			$logosocial	 = $this->imgaeCheck($social,$path);
		}

		else
		{
			$logosocial= $this->request->getVar('oldsocial');
		}


		$validatedata= array(
			"link"=> $this->request->getVar('link'),
		);

		
		$data= array(
			"id"=> $id,
			"link"=> $this->request->getVar('link'),
			"image_path"=> $logosocial,
			
		);


		if($this->validation->run($validatedata, 'socialmedia'))
		{
			
			$this->socialModel->save($data);
			return redirect()->route('index-socialmedia')->with("success","Data Update");
		}
		
		
		else
		{
			$data['social'] = $this->socialModel->find($id);
			$data['validation'] = $this->validation;

			$heading = lang("Localize.edit").' '.lang("Localize.social_media");
			$data['pageheading'] = $heading;

			$data['module'] =    lang("Localize.website_setting") ; 
			$data['title']  =    lang("Localize.social_media_list") ;

			echo view($this->Viewpath.'\socialmedia/edit',$data);

		}




	}



	public function delete($id)
	{

		$this->socialModel->delete($id);
		return redirect()->route('index-socialmedia')->with("fail","Data Deleted");
	
	}


	public function imgaeCheck($image,$path)
	{
		$newName = $image->getRandomName();
		$path = $path;
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}
}
