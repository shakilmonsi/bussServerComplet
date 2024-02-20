<?php

namespace Modules\Fitness\Controllers;

use App\Controllers\BaseController;
use Modules\Fleet\Models\VehicleModel;
use Modules\Fitness\Models\FitnessModel;
use App\Libraries\Rolepermission;

class Fitness extends BaseController
{
	protected $Viewpath;

	protected $vehicleModel;
	protected $fitnessModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Fitness\Views";
		$this->vehicleModel = new VehicleModel();
		$this->fitnessModel = new FitnessModel();
	
      
    }

	public function new()
	{
		$vehicle = $this->vehicleModel->where('status',1)->findAll();
		$data['vehicle'] = $vehicle;

		$data['module'] =    lang("Localize.fitness") ; 
		$data['title']  =    lang("Localize.add_fitness") ;

		$data['pageheading'] = lang("Localize.add_fitness");

		echo view($this->Viewpath.'\fitness/new',$data);
	}


	public function create()
	{
		
		$data= array(
			
			"fitness_name"=> $this->request->getVar('fitness_name'),	
			"vehicle_id"=> $this->request->getVar('vehicle_id'),	
			"start_date"=> $this->request->getVar('start_date'),	
			"end_date"=> $this->request->getVar('end_date'),	
			"start_milage"=> $this->request->getVar('start_milage'),	
			"end_milage"=> $this->request->getVar('end_milage'),	
		);

		if($this->validation->run($data, 'fitness'))
		{
			$this->fitnessModel->insert($data);
			
			return redirect()->route('index-fitness')->with("success","Data Save");
			
		}
		
		
		else
		{
			$vehicle = $this->vehicleModel->where('status',1)->findAll();
			$data['vehicle'] = $vehicle;
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.fitness") ; 
			$data['title']  =    lang("Localize.fitness_list") ;

			$data['pageheading'] = lang("Localize.add_fitness");

			echo view($this->Viewpath.'\fitness/new',$data);

		}
		
	}

	public function index()
	{

		$fitness = $this->fitnessModel->findAll();
		$vehicle = $this->vehicleModel->withDeleted()->where('status', 1)->findAll();

		foreach ($fitness as $fkey => $fvalue) {

			foreach ($vehicle as $vkey => $kvalue) {
				
				if ($kvalue->id == $fvalue->vehicle_id) {
					
					$fitness[$fkey]->regno = $kvalue->reg_no ;
				}
			}
			
		}

		$data['fitness'] = $fitness;
		$data['vehicle'] = $vehicle;

		$data['module'] =    lang("Localize.fitness") ; 
		$data['title']  =    lang("Localize.fitness_list") ;

		$data['pageheading'] = lang("Localize.fitness_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_fitness";
        $list_data = "fitness_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\fitness/index',$data);
	}


	public function edit($id)
	{
		$data['vehicle'] = $this->vehicleModel->where('status',1)->findAll();
		$data['fitness'] = $this->fitnessModel->find($id);

		$data['module'] =    lang("Localize.fitness") ; 
		$data['title']  =    lang("Localize.fitness_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.fitness");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\fitness/edit',$data);
	}



	public function update($id)
	{
		
		$validdata= array(
			"fitness_name"=> $this->request->getVar('fitness_name'),	
			"vehicle_id"=> $this->request->getVar('vehicle_id'),	
			"start_date"=> $this->request->getVar('start_date'),	
			"end_date"=> $this->request->getVar('end_date'),	
			"start_milage"=> $this->request->getVar('start_milage'),	
			"end_milage"=> $this->request->getVar('end_milage'),	
		);
		$data= array(
			"id"=> $id,
			"fitness_name"=> $this->request->getVar('fitness_name'),	
			"vehicle_id"=> $this->request->getVar('vehicle_id'),	
			"start_date"=> $this->request->getVar('start_date'),	
			"end_date"=> $this->request->getVar('end_date'),	
			"start_milage"=> $this->request->getVar('start_milage'),	
			"end_milage"=> $this->request->getVar('end_milage'),	
		);

		if($this->validation->run($validdata, 'fitness'))
		{
			$this->fitnessModel->save($data);
			return redirect()->route('index-fitness')->with("success","Data Update");
		}
		
		
		else
		{
		
			$data['validation'] = $this->validation;
			$data['vehicle'] = $this->vehicleModel->where('status',1)->findAll();
			$data['fitness'] = $this->fitnessModel->find($id);

			$data['module'] =    lang("Localize.fitness") ; 
			$data['title']  =    lang("Localize.fitness_list") ;

			echo view($this->Viewpath.'\fitness/edit',$data);

		}
	}


	public function delete($id)
	{
		$this->fitnessModel->delete($id);
		return redirect()->route('index-fitness')->with("fail","Data Deleted");
	}


}
