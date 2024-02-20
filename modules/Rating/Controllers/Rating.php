<?php

namespace Modules\Rating\Controllers;

use App\Controllers\BaseController;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Rating\Models\RatingModel;
use App\Libraries\Rolepermission;


class Rating extends BaseController
{
	
	protected $Viewpath;
	protected $userModel;
	protected $userDetailModel;
	protected $ratingModel;
	protected $tokenJwt;
	protected $db;
	
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Rating\Views";
		$this->userModel = new UserModel ();
		$this->userDetailModel = new UserDetailModel ();
		$this->ratingModel = new RatingModel ();
		$this->db = \Config\Database::connect();

		
		
      
    }

	
	public function index()
	{
		$data['module'] =    lang("Localize.rating") ; 
		$data['title']  =    lang("Localize.rating_list") ;
		
		$data['rating'] = $this->ratingModel->select('ratings.*,user_details.first_name,user_details.last_name')->join('user_details','user_details.user_id = ratings.user_id','left')->findAll();
		
		$data['pageheading'] = lang("Localize.rating_list");

		$rolepermissionLibrary = new Rolepermission();
        
        $list_data = "rating_list";

       
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\rating/index',$data);
	}



	public function edit($id)
	{
		$data['module'] =    lang("Localize.rating") ; 
		$data['title']  =    lang("Localize.rating_list") ;

		$data['rating'] = $this->ratingModel->find($id);

		$heading = lang("Localize.edit").' '.lang("Localize.rating");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\rating/edit',$data);
	}

	public function update($id)
	{
		$ratingData = $this->ratingModel->find($id);

		$validateData = array(
			"user_id" => $ratingData->user_id,
			"trip_id" => $ratingData->trip_id,
			"subtrip_id" => $ratingData->subtrip_id,
			"booking_id" => $ratingData->booking_id,
			"rating" =>  $this->request->getVar('rating'),
			"status" => $this->request->getVar('status'),
		);
		$insertData = array(
			"id"=> $id,
			"comments" => $this->request->getVar('comments'),
			"rating" =>  $this->request->getVar('rating'),
			"status" => $this->request->getVar('status'),
		);


		if($this->validation->run($validateData, 'rating'))
			{
				$this->ratingModel->save($insertData);
				return redirect()->route('index-rating')->with("success","Data Update");
			}

			else
			{
				$data['module'] =    lang("Localize.rating") ; 
				$data['title']  =    lang("Localize.rating_list") ;

				$data['validation'] = $this->validation;
				$data['rating'] = $this->ratingModel->find($id);
				echo view($this->Viewpath.'\rating/edit',$data);

			}
		



	}


	public function delete($id)
	{
		$this->ratingModel->delete($id);
		return redirect()->route('index-rating')->with("fail","Data Deleted");
	}


}
