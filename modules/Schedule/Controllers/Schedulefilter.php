<?php

namespace Modules\Schedule\Controllers;

use App\Controllers\BaseController;
use Modules\Schedule\Models\SchedulefilterModel;
use App\Libraries\Rolepermission;

class Schedulefilter extends BaseController
{
	protected $Viewpath;
	protected $schedulefilterModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Schedule\Views";
		$this->schedulefilterModel = new SchedulefilterModel();
		
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.schedule") ; 
		$data['title']  =    lang("Localize.add_schedule_filter") ;

		$data['pageheading'] = lang("Localize.add_schedule_filter");

		echo view($this->Viewpath.'\schedulefilter/new',$data);
	}

	public function create()
	{
		$type = $this->request->getVar('type');

		$rowcount = $this->schedulefilterModel->where('type',$type)->countAllResults();
	
		if ($rowcount>=4) {
			if ($type == 1) {
				return redirect()->route('index-schedulefilter')->with("fail","You can not add morethan 4 filter");
			} if ($type == 0){
				return redirect()->route('index-schedulefilter')->with("fail","You can not add morethan 4 filter");
			}
			
			
		}

		$start_time = 	date("h:i A", strtotime($this->request->getVar('start_time')));
		$end_time = 	date("h:i A", strtotime($this->request->getVar('end_time')));
		
		
		$validdata= array(
			"start_time"=> $start_time,
			"end_time"=> $end_time,
			"type"=> $type,
		);
		$data= array(
			"start_time"=> $start_time,
			"end_time"=> $end_time,
			"detail"=> $start_time.'-'.$end_time,
			"type"=> $type,
		);

		if($this->validation->run($validdata, 'schedulefilter'))
		{
			$this->schedulefilterModel->insert($data);
			return redirect()->route('index-schedulefilter')->with("success","Data Save");
		}
		
		else
		{
			$data['module'] =    lang("Localize.schedule") ; 
			$data['title']  =    lang("Localize.schedule_filter_list") ;

			$data['pageheading'] = lang("Localize.add_schedule_filter");

			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\schedulefilter/new',$data);

		}
		// 
	}

	public function index()
	{
		$data['module'] =    lang("Localize.schedule") ; 
		$data['title']  =    lang("Localize.schedule_filter_list") ;

		$data['pageheading'] = lang("Localize.schedule_filter_list");

		$data['schedulefilter'] = $this->schedulefilterModel->findAll();

		$rolepermissionLibrary = new Rolepermission();
		
        $add_data = "add_schedule_filter";
        $list_data = "schedule_filter_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\schedulefilter/index',$data);
	}


	public function edit($id)
	{
		$data['module'] =    lang("Localize.schedule") ; 
		$data['title']  =    lang("Localize.schedule_filter_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.schedule_filter_list");
		$data['pageheading'] = $heading;

		$data['schedulefilter'] = $this->schedulefilterModel->find($id);
		echo view($this->Viewpath.'\schedulefilter/edit',$data);
	}



	public function update($id)
	{
		$filtercount = 0;
		$type = $this->request->getVar('type');

		$totaltypedata = $this->schedulefilterModel->where('type',$type)->findAll();
		$rowcount = $totaltypedata;
		$rowcount = count((array)$rowcount);
		// dd($rowcount);
		
		if ($rowcount>4) {
			if ($type == 1) {
				return redirect()->route('index-schedulefilter')->with("fail","You can not add morethan 4 filter");
			} if ($type == 0){
				return redirect()->route('index-schedulefilter')->with("fail","You can not add morethan 4 filter");
			}
		}
	
		if ($rowcount < 4) {


			$start_time = 	date("h:i A", strtotime($this->request->getVar('start_time')));
			$end_time = 	date("h:i A", strtotime($this->request->getVar('end_time')));
		
		
				$validdata= array(
					"start_time"=> $start_time,
					"end_time"=> $end_time,
					"type"=> $type,
				);
				$data= array(
					"id"=> $id,
					"start_time"=> $start_time,
					"end_time"=> $end_time,
					"detail"=> $start_time.'-'.$end_time,
					"type"=> $type,
				);

				if($this->validation->run($validdata, 'schedulefilter'))
				{
					$this->schedulefilterModel->save($data);
					return redirect()->route('index-schedulefilter')->with("success","Data Save");
				}
				
				else
				{
					$data['module'] =    lang("Localize.schedule") ; 
					$data['title']  =    lang("Localize.schedule_filter_list") ;

					$data['validation'] = $this->validation;
					$data['schedulefilter'] = $this->schedulefilterModel->find($id);
					echo view($this->Viewpath.'\schedulefilter/edit',$data);

				}
		}

		else {
			return redirect()->route('index-schedulefilter')->with("fail","You can not add morethan 4 filter");
		}

		
		// 
	}


	public function delete($id)
	{
		$this->schedulefilterModel->delete($id);
		
		return redirect()->route('index-schedulefilter')->with("fail","Data Deleted");
	}

}
