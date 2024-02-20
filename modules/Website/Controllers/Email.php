<?php

namespace Modules\Website\Controllers;

use App\Controllers\BaseController;
use Modules\Website\Models\EmailModel;
use Modules\Website\Models\SubscribeModel;
use App\Libraries\Rolepermission;

class Email extends BaseController
{

	protected $Viewpath;
	protected $emailModel; 
	protected $subscribeModel; 
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Website\Views";
		$this->emailModel = new EmailModel();
		$this->subscribeModel = new SubscribeModel();
		$this->db      = \Config\Database::connect();
      
    }


	public function new()
	{
		$data['email']  = $this->emailModel->first();

		$data['module'] =    lang("Localize.website_setting") ; 
		$data['title']  =    lang("Localize.email") ;
		$data['pageheading'] = lang("Localize.email");

		if (!empty($data['email'])) {
			echo view($this->Viewpath.'\email/edit',$data);
		} else {
			echo view($this->Viewpath.'\email/new',$data);
		}
	}


	public function create()
	{

		$validatedata= array(
			"protocol"=> $this->request->getVar('protocol'),
			"smtphost"=> $this->request->getVar('smtphost'),
			"smtpuser"=> $this->request->getVar('smtpuser'),
			"smtppass"=> $this->request->getVar('smtppass'),
			"smtpport"=> $this->request->getVar('smtpport'),
			"smtpcrypto"=> $this->request->getVar('smtpcrypto'),
		);

		
		if($this->validation->run($validatedata, 'email'))
		{
			
			$this->emailModel->insert($validatedata);
			return redirect()->route('new-email')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.website_setting") ; 
			$data['title']  =    lang("Localize.email") ;

			$data['pageheading'] = lang("Localize.email");

			echo view($this->Viewpath.'\email/new',$data);

		}
		


	}



	public function update($id)
	{

		$validatedata= array(
			"protocol"=> $this->request->getVar('protocol'),
			"smtphost"=> $this->request->getVar('smtphost'),
			"smtpuser"=> $this->request->getVar('smtpuser'),
			"smtppass"=> $this->request->getVar('smtppass'),
			"smtpport"=> $this->request->getVar('smtpport'),
			"smtpcrypto"=> $this->request->getVar('smtpcrypto'),
		);
		$data= array(

			"id"=> $id,
			"protocol"=> $this->request->getVar('protocol'),
			"smtphost"=> $this->request->getVar('smtphost'),
			"smtpuser"=> $this->request->getVar('smtpuser'),
			"smtppass"=> $this->request->getVar('smtppass'),
			"smtpport"=> $this->request->getVar('smtpport'),
			"smtpcrypto"=> $this->request->getVar('smtpcrypto'),
		);

		
		if($this->validation->run($validatedata, 'email'))
		{
			
			$this->emailModel->save($data);
			return redirect()->route('new-email')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.website_setting") ; 
			$data['title']  =    lang("Localize.email") ;

			$heading = lang("Localize.edit").' '.lang("Localize.email");
			$data['pageheading'] = $heading;

			echo view($this->Viewpath.'\email/new',$data);

		}
		


	}

	public function subscribeIndex()

	{

		$data['module'] =    lang("Localize.website_setting") ; 
		$data['title']  =    lang("Localize.subscribe_list") ;
		$data['pageheading'] = lang("Localize.subscribe_list");

		$data['subscribe']  = $this->subscribeModel->findAll();

		$rolepermissionLibrary = new Rolepermission();
        
        $list_data = "subscribe_list";

        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);
		
		echo view($this->Viewpath.'\subscribe/index',$data);


	}

	public function subscribedelete($id)
	{

		$this->subscribeModel->delete($id);
		return redirect()->route('index-subscribe')->with("fail","Data Deleted");
	
	}
}
