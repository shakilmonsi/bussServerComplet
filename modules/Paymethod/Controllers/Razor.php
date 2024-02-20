<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Models\RazorModel;

class Razor extends BaseController
{
	protected $Viewpath;
	protected $razorModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Paymethod\Views";
		$this->razorModel = new RazorModel();
		
      
    }
	public function new()
	{
		$data['module'] =    lang("Localize.payment_gateway") ; 
		$data['title']  =    lang("Localize.razorpay") ; 

		$data['pageheading'] = lang("Localize.razorpay");

		$data['razor'] = $this->razorModel->first();
		if (!empty($data['razor'])) {
			echo view($this->Viewpath.'\razor/edit',$data);
		}
		else
		{
			echo view($this->Viewpath.'\razor/new',$data);
		}
		
	}


	public function create()
	{
		
		
		$data= array(
			
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"environment"=> $this->request->getVar('environment'),	
		);

		if($this->validation->run($data, 'razor'))
		{
			$this->razorModel->insert($data);
			return redirect()->route('new-razor')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.razorpay") ; 
			$data['pageheading'] = lang("Localize.razorpay");
			echo view($this->Viewpath.'\razor/new',$data);

		}
		
	}

	public function update($id)
	{
		
		$validdata= array(
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"environment"=> $this->request->getVar('environment'),	
		);
		$data= array(
			"id"=> $id,
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"environment"=> $this->request->getVar('environment'),	
		);

		if($this->validation->run($validdata, 'razor'))
		{
			$this->razorModel->save($data);
			return redirect()->route('new-razor')->with("success","Data Update");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.razorpay") ; 
			$data['pageheading'] = lang("Localize.razorpay");
			$data['validation'] = $this->validation;
			$data['razor'] = $this->razorModel->find($id);
			echo view($this->Viewpath.'\razor/edit',$data);

		}
	}
}
