<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;
use Modules\Ticket\Models\MaxtimeModel;

use App\Libraries\Rolepermission;

class Maxtime extends BaseController
{

	
	protected $Viewpath;
	protected $maxtimeModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Ticket\Views";
		$this->maxtimeModel = new MaxtimeModel();
      
    }

	public function new()
	{
		$rolepermissionLibrary = new Rolepermission();
        $add_booking_time = "add_booking_time";
        $book_time_list = "book_time_list";

        $data['add_booking_time'] = $rolepermissionLibrary->create($add_booking_time); 
        $data['book_time_list'] = $rolepermissionLibrary->edit($book_time_list); 

		

		$data['maxtime'] = $this->maxtimeModel->first();

		$data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.add_booking_time") ;

		
		$data['pageheading'] = lang("Localize.book_time");

		if(!empty($data['maxtime']))
		{
			
			echo view($this->Viewpath.'\maxtime/edit',$data);
		}
		else
		{
			
			if ( $data['add_booking_time'] == true) {
				echo view($this->Viewpath.'\maxtime/new',$data);
			}

			else {
				
				return redirect()->back()->with("fail","You Don't have Permission");
				
			}
			
		}
		
	}

	public function create()
	{
		
		
		$data= array(
			
			"maxtime"=> $this->request->getVar('maxtime'),
		);

		if($this->validation->run($data, 'maxtime'))
		{
		
			$this->maxtimeModel->insert($data);
			return redirect()->route('index-maxtime')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['module'] =    lang("Localize.ticket_booking") ; 
			$data['title']  =    lang("Localize.add_booking_time") ;

			$data['validation'] = $this->validation;

			$data['pageheading'] = lang("Localize.book_time");
			echo view($this->Viewpath.'\maxtime/new',$data);

		}
		
	}
	public function index()
	{
		$rolepermissionLibrary = new Rolepermission();
       
        $book_time_list = "book_time_list";
		$data['book_time_list'] = $rolepermissionLibrary->edit($book_time_list); 

		$data['maxtime'] = $this->maxtimeModel->findAll();

		$data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.booking_time_list") ;

		$data['pageheading'] = lang("Localize.booking_time_list");

		echo view($this->Viewpath.'\maxtime/index',$data);
	}


	public function edit($id)
	{
		$data['maxtime'] = $this->maxtimeModel->find($id);

		$data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.booking_time_list") ;

		$data['pageheading'] = lang("Localize.book_time");
		
		echo view($this->Viewpath.'\maxtime/edit',$data);
	}


	public function update($id)
	{

		$validdata= array(
			"maxtime"=> $this->request->getVar('maxtime'),
			
		);

		$data= array(
			"id"=> $id,
			"maxtime"=> $this->request->getVar('maxtime'),
			);

		if($this->validation->run($validdata, 'maxtime'))
		{
			$this->maxtimeModel->save($data);
			return redirect()->route('index-maxtime')->with("success","Data Update");
		}
		
		else
		{
			$data['validation'] = $this->validation;
			$data['maxtime'] = $this->maxtimeModel->find($id);

			$data['module'] =    lang("Localize.ticket_booking") ; 
			$data['title']  =    lang("Localize.booking_time_list") ;

			$data['pageheading'] = lang("Localize.book_time");

			echo view($this->Viewpath.'\maxtime/edit',$data);

		}
	}
}
