<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Models\StripeModel;

class Stripe extends BaseController
{
	protected $Viewpath;
	protected $stripeModel;
	
	public function __construct()
    {
        $this->Viewpath = "Modules\Paymethod\Views";
		$this->stripeModel = new StripeModel();
	}


	public function new()
	{
		$data['module'] =    lang("Localize.payment_gateway") ; 
		$data['title']  =    lang("Localize.stripe") ; 
		
		$data['stripe'] = $this->stripeModel->first();
		$data['pageheading'] = lang("Localize.stripe");
		if (!empty($data['stripe'])) {
			echo view($this->Viewpath.'\stripe/edit',$data);
		}
		else
		{
			echo view($this->Viewpath.'\stripe/new',$data);
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

		if($this->validation->run($data, 'stripe'))
		{
			$this->stripeModel->insert($data);
			return redirect()->route('new-stripe')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.stripe") ; 
			$data['pageheading'] = lang("Localize.stripe");
			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\stripe/new',$data);

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

		if($this->validation->run($validdata, 'stripe'))
		{
			$this->stripeModel->save($data);
			return redirect()->route('new-stripe')->with("success","Data Update");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.payment_gateway") ; 
			$data['title']  =    lang("Localize.stripe") ; 
			$data['pageheading'] = lang("Localize.stripe");
			$data['validation'] = $this->validation;
			$data['stripe'] = $this->stripeModel->find($id);
			echo view($this->Viewpath.'\stripe/edit',$data);

		}
	}
	
}
