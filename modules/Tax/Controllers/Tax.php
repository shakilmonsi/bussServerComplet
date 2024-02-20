<?php

namespace Modules\Tax\Controllers;

use App\Controllers\BaseController;
use Modules\Tax\Models\TaxModel;
use App\Libraries\Rolepermission;

class Tax extends BaseController
{
	protected $Viewpath;
	protected $taxModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Tax\Views";
		$this->taxModel = new TaxModel();
      
    }
	public function new()
	{
		$data['module'] =    lang("Localize.tax") ; 
		$data['title']  =    lang("Localize.add_tax") ;

		$data['pageheading'] = lang("Localize.add_tax");

		echo view($this->Viewpath.'\tax/new',$data);
	}

	public function create()
	{
		$data= array(
			"name"=> $this->request->getVar('name'),
			"value"=> $this->request->getVar('value'),
			"tax_reg"=> $this->request->getVar('tax_reg'),
			"status"=> $this->request->getVar('status'),
		);
	
		
		if($this->validation->run($data, 'tax'))
		{
			
			$this->taxModel->insert($data);
			return redirect()->route('index-tax')->with("success","Data Save");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.tax") ; 
			$data['title']  =    lang("Localize.tax_list") ;

			$data['pageheading'] = lang("Localize.add_tax");

			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\tax/new',$data);

		}
		
	}


	public function index()
	{
		$data['module'] =    lang("Localize.tax") ; 
		$data['title']  =    lang("Localize.tax_list") ;

		$data['pageheading'] = lang("Localize.tax_list");

		$data['tax'] = $this->taxModel->orderBy('id', 'DESC')->findAll();

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_tax";
        $list_data = "tax_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\tax/index',$data);
	}

	public function edit($id)
	{
		$data['module'] =    lang("Localize.tax") ; 
		$data['title']  =    lang("Localize.tax_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.tax");
		$data['pageheading'] = $heading;

		$data['tax'] = $this->taxModel->find($id);
		echo view($this->Viewpath.'\tax/edit',$data);
	}



	public function update($id)
	{
		$validdata= array(
			"name"=> $this->request->getVar('name'),
			"value"=> $this->request->getVar('value'),
			"tax_reg"=> $this->request->getVar('tax_reg'),
			"status"=> $this->request->getVar('status'),
		);
		$data= array(
			"id"=> $id,
			"name"=> $this->request->getVar('name'),
			"value"=> $this->request->getVar('value'),
			"tax_reg"=> $this->request->getVar('tax_reg'),
			"status"=> $this->request->getVar('status'),
		);

		if($this->validation->run($validdata, 'tax'))
		{
			$this->taxModel->save($data);
			return redirect()->route('index-tax')->with("success","Data Update");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.tax") ; 
			$data['title']  =    lang("Localize.tax_list") ;

			$heading = lang("Localize.edit").' '.lang("Localize.tax");
			$data['pageheading'] = $heading;

			$data['validation'] = $this->validation;
			$data['tax'] = $this->taxModel->find($id);
			echo view($this->Viewpath.'\tax/edit',$data);

		}
	}


	public function delete($id)
	{

		$this->taxModel->delete($id);
		return redirect()->route('index-tax')->with("fail","Data Deleted");
	
	}
}
