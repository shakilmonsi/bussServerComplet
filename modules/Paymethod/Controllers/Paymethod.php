<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Models\PaymethodModel;
use App\Libraries\Rolepermission;

class Paymethod extends BaseController
{

	protected $Viewpath;
	protected $paymethodModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Paymethod\Views";
		$this->paymethodModel = new PaymethodModel();
		
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.payment_method") ; 
		$data['title']  =    lang("Localize.add_payment_method") ;

		$data['pageheading'] = lang("Localize.add_payment_method");

		echo view($this->Viewpath.'\paymethod/new',$data);
	}

	public function create()
	{
		
		
		$data= array(
			
			"name"=> $this->request->getVar('name'),	
			"status"=> $this->request->getVar('status'),	
		);

		if($this->validation->run($data, 'paymethod'))
		{
			$this->paymethodModel->insert($data);
			return redirect()->route('index-paymethod')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.payment_method") ; 
			$data['title']  =    lang("Localize.add_payment_method") ;

			$data['pageheading'] = lang("Localize.add_payment_method");

			echo view($this->Viewpath.'\paymethod/new',$data);

		}
		
	}

	public function index()
	{
		$data['paymethod'] = $this->paymethodModel->findAll();

		$data['module'] =    lang("Localize.payment_method") ; 
		$data['title']  =    lang("Localize.payment_method_list") ;

		$data['pageheading'] = lang("Localize.payment_method_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_payment_method";
        $list_data = "payment_method_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\paymethod/index',$data);
	}


	public function edit($id)
	{
		$data['paymethod'] = $this->paymethodModel->find($id);

		$data['module'] =    lang("Localize.payment_method") ; 
		$data['title']  =    lang("Localize.payment_method_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.payment_method");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\paymethod/edit',$data);
	}

	public function update($id)
	{
		
		$validdata= array(
			"name"=> $this->request->getVar('name'),	
			"status"=> $this->request->getVar('status'),	
		);
		$data= array(
			"id"=> $id,
			"name"=> $this->request->getVar('name'),	
			"status"=> $this->request->getVar('status'),	
		);

		if($this->validation->run($validdata, 'paymethod'))
		{
			$this->paymethodModel->save($data);
			return redirect()->route('index-paymethod')->with("success","Data Update");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;
			$data['paymethod'] = $this->paymethodModel->find($id);
			$data['module'] =    lang("Localize.payment_method") ; 
			$data['title']  =    lang("Localize.payment_method_list") ;
			$heading = lang("Localize.edit").' '.lang("Localize.payment_method");
			$data['pageheading'] = $heading;
			echo view($this->Viewpath.'\paymethod/edit',$data);

		}
	}

	public function delete($id)
	{
		$this->paymethodModel->delete($id);
		return redirect()->route('index-paymethod')->with("fail","Data Deleted");
	}
}
