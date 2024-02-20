<?php

namespace Modules\Website\Controllers\Api;

use App\Controllers\BaseController;

use CodeIgniter\API\ResponseTrait;
use Modules\Website\Models\SubscribeModel;
use Modules\User\Models\UserModel;


use Modules\User\Models\UserDetailModel;
use Modules\Website\Models\FooterModel;
use Modules\Website\Models\WebsettingModel;

class Email extends BaseController
{

	private $subscribModel;
    use ResponseTrait;
	protected $userModel; 

	protected $footerModel; 
	protected $userDetalModel; 
	protected $websettingModel; 

    public function __construct()
    {

        $this->subscribModel = new SubscribeModel();
		$this->userModel = new UserModel();

		$this->footerModel = new FooterModel();
		$this->userDetalModel = new UserDetailModel();
		$this->websettingModel = new WebsettingModel();
    }


	public function suibscrib()
	{
		$validatedata= array(
			"email"=> $this->request->getVar('email'),
		);
		

		if($this->validation->run($validatedata, 'subscrib'))
		{
			
			$this->subscribModel->insert($validatedata);

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $validatedata,
            ];

            return $this->response->setJSON($data);
			
		}

		else
		{

			$data = [

                'status' => "fail",
                'response' => 201,
                'error' => $this->validation->listErrors(),
            ];

            return $this->response->setJSON($data);

			

		}
	}


	public function chekckEmailForgetPass()
	{

		$email = $this->request->getVar('email');

		$findEmail = $this->userModel->where('login_email',$email)->first();
		$userDetai = $this->userDetalModel->where('user_id',$findEmail->id)->first();


		if(!empty($findEmail))
		{
			$code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 8);
			
			$data= array(
				"id"=> $findEmail->id,
				"recovery_code"=> $code,	
			);

			$this->userModel->save($data);

			$address = $this->footerModel->first();
			$companydetail = $this->websettingModel->first();

			$data['code'] = $code;
			$data['contact'] = $address->contact;
			$data['email'] = $address->email;
			$data['opentime'] = $address->opentime;
			$data['address'] = $address->address;
			$data['logotext'] = $companydetail->logotext;
			$data['name'] = $userDetai->first_name ." ". $userDetai->last_name;

			$status = sendemail($findEmail->login_email,$data );
			

			if ($status) {

				$data = [

					'status' => "success",
					'response' => 200,
					'slug' => $findEmail->slug,
				];
	
				return $this->response->setJSON($data);
				
			}

			else {

				$data = [

					'status' => "fail",
					'response' => 201,
					'message' => "Error in mail sending",
				];
	
				return $this->response->setJSON($data);
				
			}
			

		}
		else
		{
			
			$data = [

                'status' => "fail",
                'response' => 201,
                'message' => "Email not found",
            ];

            return $this->response->setJSON($data);
		}

	}


	public function confirmResetPassword()
	{
		

		$recovery_code = $this->request->getVar('recovery_code');
		$password = $this->request->getVar('password');
		$repassword = $this->request->getVar('repassword');
		$slug = $this->request->getVar('slug');

	
		$finduser = $this->userModel->where('slug',$slug)->first();

		$validdata= array(
			"recovery_code" => $this->request->getVar('recovery_code'),
			"password" => $this->request->getVar('password'),
			"repassword" => $this->request->getVar('repassword'),	
		);

		if ($finduser->recovery_code != $recovery_code) 
		{
			
			$data = [

                'status' => "fail",
                'response' => 201,
                'message' => "Invalid Recovery Code",
            ];

            return $this->response->setJSON($data);
			
		} 
		

		$data= array(
			"id"=> $finduser->id,
			'password' => password_hash($password,PASSWORD_DEFAULT),
			
		);

		

		if($this->validation->run($validdata, 'resetpass'))
		{
			$this->userModel->save($data);
			
			$data = [

				'status' => "success",
				'response' => 200,
				'message' => "Password Change Successfull",
			];

			return $this->response->setJSON($data);
		}
		else
		{
			$data = [

                'status' => "fail",
                'response' => 201,
                'error' => $this->validation->getErrors(),
            ];

            return $this->response->setJSON($data);
		}
	}
}
