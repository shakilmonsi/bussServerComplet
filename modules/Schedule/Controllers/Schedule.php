<?php

namespace Modules\Schedule\Controllers;

use App\Controllers\BaseController;
use Modules\Schedule\Models\ScheduleModel;
use App\Libraries\Rolepermission;

class Schedule extends BaseController
{

	protected $Viewpath;
	protected $scheduleModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Schedule\Views";
		$this->scheduleModel = new ScheduleModel();
		
      
    }


	public function new()
	{
		$data['module'] =    lang("Localize.schedule") ; 
		$data['title']  =    lang("Localize.add_schedule") ;

		$data['pageheading'] = lang("Localize.add_schedule");

		echo view($this->Viewpath.'\schedule/new',$data);
	}
	public function index()
	{
		$data['module'] =    lang("Localize.schedule") ; 
		$data['title']  =    lang("Localize.schedule_list") ;

		$data['pageheading'] = lang("Localize.schedule_list");

		$data['schedule'] = $this->scheduleModel->findAll();

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_schedule";
        $list_data = "schedule_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\schedule/index',$data);
	}

	public function create()
	{
		$start_time = 	date("h:i A", strtotime($this->request->getVar('start_time')));
		$end_time = 	date("h:i A", strtotime($this->request->getVar('end_time')));
		
		
		$data= array(
			"start_time"=> $start_time,
			"end_time"=> $end_time,
		);

		if($this->validation->run($data, 'schedule'))
		{
			$this->scheduleModel->insert($data);
			return redirect()->route('index-schedule')->with("success","Data Save");
		}
		
		else
		{
			$data['module'] =    lang("Localize.schedule") ; 
			$data['title']  =    lang("Localize.schedule_list") ;
			$data['pageheading'] = lang("Localize.add_schedule");
			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\schedule/new',$data);

		}
		// 
	}

	public function edit($id)
	{
		$data['schedule'] = $this->scheduleModel->find($id);
		$data['module'] =    lang("Localize.schedule") ; 
		$data['title']  =    lang("Localize.schedule_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.schedule");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\schedule/edit',$data);
	}


	public function update($id)
	{
		$start_time = 	date("h:i A", strtotime($this->request->getVar('start_time')));
		$end_time = 	date("h:i A", strtotime($this->request->getVar('end_time')));

		$validdata= array(
			"start_time"=>$start_time,
			"end_time"=> $end_time,
		);
		$data= array(
			"id"=> $id,
			"start_time"=>$start_time,
			"end_time"=> $end_time,
		);

		if($this->validation->run($validdata, 'schedule'))
		{
			$this->scheduleModel->save($data);
			return redirect()->route('index-schedule')->with("success","Data Save");
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.schedule") ; 
			$data['title']  =    lang("Localize.schedule_list") ;
			$data['validation'] = $this->validation;

			$heading = lang("Localize.edit").' '.lang("Localize.schedule");
			$data['pageheading'] = $heading;

			echo view($this->Viewpath.'\schedule/edit',$data);

		}
	}


	public function delete($id)
	{
		$this->scheduleModel->delete($id);
		return redirect()->route('index-schedule')->with("fail","Data Deleted");
	}

	
}
