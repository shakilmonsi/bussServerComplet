<?php

namespace Modules\Website\Controllers;

use App\Controllers\BaseController;
use Modules\Website\Models\FooterModel;

class Footer extends BaseController
{

	protected $Viewpath;
	protected $footerModel;
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Website\Views";
		$this->footerModel = new FooterModel();
		$this->db      = \Config\Database::connect();
      
    }

	public function new()
	{
		$data['footer']  = $this->footerModel->first();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.footer") ;

		$data['pageheading'] = lang("Localize.footer");


		if (!empty($data['footer'])) {
			echo view($this->Viewpath.'\footer/edit',$data);
		} else {
			echo view($this->Viewpath.'\footer/new',$data);
		}
		
		
	}

	public function create()
	{

		$validatedata= array(
			"contact"=> $this->request->getVar('contact'),
			"opentime"=> $this->request->getVar('opentime'),
			"address"=> $this->request->getVar('address'),
			"email"=> $this->request->getVar('email'),
		);

		
		if($this->validation->run($validatedata, 'footer'))
		{
			
			$this->footerModel->insert($validatedata);
			return redirect()->route('new-footer')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.footer") ;

			$data['pageheading'] = lang("Localize.footer");

			echo view($this->Viewpath.'\footer/new',$data);

		}
		


	}


	public function update($id)
	{

		$validatedata= array(
			"contact"=> $this->request->getVar('contact'),
			"opentime"=> $this->request->getVar('opentime'),
			"address"=> $this->request->getVar('address'),
			"email"=> $this->request->getVar('email'),
		);
		$data= array(

			"id"=> $id,
			"contact"=> $this->request->getVar('contact'),
			"opentime"=> $this->request->getVar('opentime'),
			"address"=> $this->request->getVar('address'),
			"email"=> $this->request->getVar('email'),
		);

		
		if($this->validation->run($validatedata, 'footer'))
		{
			
			$this->footerModel->save($data);
			return redirect()->route('new-footer')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.footer") ;

			$data['pageheading'] = lang("Localize.footer");

			echo view($this->Viewpath.'\footer/new',$data);

		}
		


	}

	public function index()
	{
		//
	}
}
