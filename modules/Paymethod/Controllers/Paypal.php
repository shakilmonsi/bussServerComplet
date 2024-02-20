<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Models\PaypalModel;

class Paypal extends BaseController
{
	protected $Viewpath;
	protected $paypalModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Paymethod\Views";
		$this->paypalModel = new PaypalModel();
		
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.payment_gateway") ; 
		$data['title']  =    lang("Localize.paypal") ; 
		$data['paypal'] = $this->paypalModel->first();
		$data['pageheading'] = lang("Localize.paypal");
		if (!empty($data['paypal'])) {
			echo view($this->Viewpath.'\paypal/edit',$data);
		}
		else
		{
			echo view($this->Viewpath.'\paypal/new',$data);
		}
		
	}

	public function create()
	{
		
		
		$data= array(
			
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"live_c_kye"=> $this->request->getVar('live_c_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"test_c_kye"=> $this->request->getVar('test_c_kye'),	
			"environment"=> $this->request->getVar('environment'),	
			"email"=> $this->request->getVar('email'),	
			"marchantid"=> $this->request->getVar('marchantid'),	
		);
		
		if($this->validation->run($data, 'paypal'))
		{
			$this->paypalModel->insert($data);
			return redirect()->route('new-paypal')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.paypal") ; 

			$data['pageheading'] = lang("Localize.paypal");

			echo view($this->Viewpath.'\paypal/new',$data);

		}
		
	}


	public function update($id)
	{
		
		$validdata= array(
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"live_c_kye"=> $this->request->getVar('live_c_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"test_c_kye"=> $this->request->getVar('test_c_kye'),	
			"environment"=> $this->request->getVar('environment'),	
			"email"=> $this->request->getVar('email'),	
			"marchantid"=> $this->request->getVar('marchantid'),
		);
		$data= array(
			"id"=> $id,
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"live_c_kye"=> $this->request->getVar('live_c_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"test_c_kye"=> $this->request->getVar('test_c_kye'),	
			"environment"=> $this->request->getVar('environment'),	
			"email"=> $this->request->getVar('email'),	
			"marchantid"=> $this->request->getVar('marchantid'),
		);

		if($this->validation->run($validdata, 'paypal'))
		{
			$this->paypalModel->save($data);
			return redirect()->route('new-paypal')->with("success","Data Update");
		}
		
		
		else
		{

			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.paypal") ; 

			$data['validation'] = $this->validation;
			$data['paypal'] = $this->paypalModel->find($id);

			$data['pageheading'] = lang("Localize.paypal");
			echo view($this->Viewpath.'\paypal/edit',$data);

		}
	}

}
