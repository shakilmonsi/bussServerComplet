<?php

namespace Modules\Rating\Controllers\Api;

use App\Controllers\BaseController;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Rating\Models\RatingModel;


use CodeIgniter\API\ResponseTrait;
use Firebase\JWT\JWT;
use Exception;
use App\Libraries\Tokenjwt;

class Rating extends BaseController
{


	use ResponseTrait;
	protected $Viewpath;
	protected $userModel;
	protected $userDetailModel;
	protected $ratingModel;
	protected $tokenJwt;
	protected $db;
	
	
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Passanger\Views";
		$this->userModel = new UserModel ();
		$this->userDetailModel = new UserDetailModel ();
		$this->ratingModel = new RatingModel ();
		$this->db = \Config\Database::connect();

		$this->tokenJwt = new Tokenjwt ();
		
      
    }



	public function create()
	{
		

		$key = getenv('TOKEN_SECRET');
		$token = $this->tokenJwt->tokencheck();

		try {
					$decoded = JWT::decode($token, $key, array("HS256"));

					// ------------------------------------------------------------
						// can be validate using jwt token
					// ------------------------------------------------------------

						$user_id = $this->request->getVar('user_id');
						$trip_id = $this->request->getVar('trip_id');
						$subtrip_id = $this->request->getVar('subtrip_id');
						$booking_id = $this->request->getVar('booking_id');
						$comments = $this->request->getVar('comments');
						$rating = $this->request->getVar('rating');
						$status = 1;

						
						$validateData = array(
							"user_id" => $user_id,
							"trip_id" => $trip_id,
							"subtrip_id" => $subtrip_id,
							"booking_id" => $booking_id,
							"rating" => $rating,
							"status" => $status,
						);
						$insertData = array(
							"user_id" => $user_id,
							"trip_id" => $trip_id,
							"subtrip_id" => $subtrip_id,
							"booking_id" => $booking_id,
							"comments" => $comments,
							"rating" => $rating,
							"status" => $status,
						);


						if($this->validation->run($validateData, 'rating'))
							{
								$this->ratingModel->insert($insertData);
								$data = [
									'status' => "success",
									'response' => 200,
									'data' =>$validateData,
								];
					
								return $this->response->setJSON($data);
								
							}

						else
						{
							$data = [
								'status' => "fail",
								'response' => 404,
								'error' => $this->validation->getErrors(),
								'message' =>"Error in Validation",
							];
				
							return $this->response->setJSON($data);

						}
							
						

		} catch (Exception $ex) {
				$data = [
					'status' => "fail",
					'response' => 404,
					'data' =>"token not valid",
					'error' =>  $ex,
				];
				return $this->response->setJSON($data);
		}
		
		
	}


	public function usercheck($slag)
	{

		$userdetail = $this->userModel->where('slug',$slag)->first();
		$userdetailid = $this->userDetailModel->where('user_id',$userdetail->id)->first();
		return $userdetailid;
	}

	public function getAllReview($subtripId)
	{
		$rdata = $this->ratingModel->select('ratings.*,user_details.first_name,user_details.last_name,user_details.image')
												->join('user_details','user_details.user_id = ratings.user_id','left')
												->where('ratings.status',1)
												->where('ratings.subtrip_id',$subtripId)
											->findAll();

			if (!empty($rdata)) {

				foreach ($rdata as $key => $value) {
					
					$rdata[$key]->image = base_url().'/public/'.$value->image;
				}	

				$data = [
					'status' => "success",
					'response' => 200,
					'data' =>$rdata,
				];
	
				return $this->response->setJSON($data);
				
			}
			 else {
				$data = [
					'status' => "fail",
					'response' => 404,
					'message' =>"No Review Found",	
				];
				return $this->response->setJSON($data);
			}
			
	

	}
}
