<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Models\PaystackModel;

class Paystack extends BaseController
{

	protected $Viewpath;
	protected $paystackModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Paymethod\Views";
		$this->paystackModel = new PaystackModel();
		
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.payment_gateway") ; 
		$data['title']  =    lang("Localize.paystack") ; 
		
		$data['paystack'] = $this->paystackModel->first();
		$data['pageheading'] = lang("Localize.paystack");

		if (!empty($data['paystack'])) {
			echo view($this->Viewpath.'\paystack/edit',$data);
		}
		else
		{
			echo view($this->Viewpath.'\paystack/new',$data);
		}
		
	}

	public function create()
	{
		
		
		$data= array(
			
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"live_p_kye"=> $this->request->getVar('live_p_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"test_p_kye"=> $this->request->getVar('test_p_kye'),	
			"environment"=> $this->request->getVar('environment'),	
		);

		if($this->validation->run($data, 'paystack'))
		{
			$this->paystackModel->insert($data);
			return redirect()->route('new-paystack')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.paystack") ; 
			$data['pageheading'] = lang("Localize.paystack");

			echo view($this->Viewpath.'\paystack/new',$data);

		}
		
	}

	public function update($id)
	{
		
		$validdata= array(
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"live_p_kye"=> $this->request->getVar('live_p_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"test_p_kye"=> $this->request->getVar('test_p_kye'),	
			"environment"=> $this->request->getVar('environment'),	
		);
		$data= array(
			"id"=> $id,
			"live_s_kye"=> $this->request->getVar('live_s_kye'),	
			"live_p_kye"=> $this->request->getVar('live_p_kye'),	
			"test_s_kye"=> $this->request->getVar('test_s_kye'),	
			"test_p_kye"=> $this->request->getVar('test_p_kye'),	
			"environment"=> $this->request->getVar('environment'),	
		);

		if($this->validation->run($validdata, 'paystack'))
		{
			$this->paystackModel->save($data);
			return redirect()->route('new-paystack')->with("success","Data Update");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.paystack") ; 
			$data['pageheading'] = lang("Localize.paystack");

			$data['validation'] = $this->validation;
			$data['paystack'] = $this->paystackModel->find($id);
			echo view($this->Viewpath.'\paystack/edit',$data);

		}
	}


}
