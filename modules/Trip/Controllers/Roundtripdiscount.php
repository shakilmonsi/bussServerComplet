<?php

namespace Modules\Trip\Controllers;

use App\Controllers\BaseController;
use Modules\Trip\Models\RoundtripdiscoundModel;
use App\Libraries\Rolepermission;

class Roundtripdiscount extends BaseController
{
    protected $Viewpath;
	protected $roundtripdiscountModel;
	
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Trip\Views";
		$this->roundtripdiscountModel = new RoundtripdiscoundModel();
		$this->db      = \Config\Database::connect();
		
      
    }
    public function index()
    {

        $data['discountround'] = $this->roundtripdiscountModel->orderBy('id', 'DESC')->findAll();

        if (empty($data['discountround'])) {
            return redirect()->route('new-roundtripdiscount');
        }

        $data['module'] =    lang("Localize.trip") ; 
		$data['title']  =    lang("Localize.discount_round_trip") ;

		$data['pageheading'] = lang("Localize.discount_round_trip");

		

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "discount_round_trip";
        $list_data = "discount_round_trip";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\discountround/index',$data);
    }

    public function new()
	{
		

		$data['module'] =    lang("Localize.trip") ; 
		$data['title']  =    lang("Localize.discount_round_trip") ;

		$data['pageheading'] = lang("Localize.discount_round_trip");
		
		echo view($this->Viewpath.'\discountround/new',$data);
	}

    public function create()
	{
		$data= array(
			"name"=> $this->request->getVar('name'),
			"discountrate"=> $this->request->getVar('discountrate'),
			"status"=> $this->request->getVar('status'),
		);
	
		
		if($this->validation->run($data, 'discountround'))
		{
			
			$this->roundtripdiscountModel->insert($data);
           
			return redirect()->route('index-roundtripdiscount')->with("success","Data Save");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.trip") ; 
            $data['title']  =    lang("Localize.discount_round_trip") ;

            $data['pageheading'] = lang("Localize.discount_round_trip");

			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\discountround/new',$data);

		}
		
	}


    public function edit($id)
	{
		$data['module'] =    lang("Localize.trip") ; 
        $data['title']  =    lang("Localize.discount_round_trip") ;

		$heading = lang("Localize.edit").' '.lang("Localize.discount_round_trip");
		$data['pageheading'] = $heading;

		$data['discountround'] = $this->roundtripdiscountModel->find($id);
		echo view($this->Viewpath.'\discountround/edit',$data);
	}


    public function update($id)
	{
		$validdata= array(
			"name"=> $this->request->getVar('name'),
			"discountrate"=> $this->request->getVar('discountrate'),
			"status"=> $this->request->getVar('status'),
		);
		$data= array(
			"id"=> $id,
			"name"=> $this->request->getVar('name'),
			"discountrate"=> $this->request->getVar('discountrate'),
			"status"=> $this->request->getVar('status'),
		);

		if($this->validation->run($validdata, 'discountround'))
		{
			$this->roundtripdiscountModel->save($data);
			return redirect()->route('index-roundtripdiscount')->with("success","Data Update");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.trip") ; 
            $data['title']  =    lang("Localize.discount_round_trip") ;

            $heading = lang("Localize.edit").' '.lang("Localize.discount_round_trip");
            $data['pageheading'] = $heading;

			$data['validation'] = $this->validation;
			$data['discountround'] = $this->roundtripdiscountModel->find($id);
			echo view($this->Viewpath.'\tax/edit',$data);

		}
	}

    public function delete($id)
	{

		$this->roundtripdiscountModel->delete($id);
		return redirect()->route('index-roundtripdiscount')->with("fail","Data Deleted");
	
	}
}
