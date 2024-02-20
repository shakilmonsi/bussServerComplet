<?php

namespace Modules\Page\Controllers\Api;

use App\Controllers\BaseController;
use Modules\Page\Models\AboutModel;
use Modules\Page\Models\CookeModel;
use Modules\Page\Models\PrivacyModel;
use Modules\Page\Models\TermsModel;
use Modules\Page\Models\FaqModel;
use Modules\Page\Models\FaqQuestionModel;


class Page extends BaseController
{
	protected $aboutModel;
	protected $cookeModel;
	protected $privacyModel;
	protected $termModel;
	protected $faqModel;
	protected $faqQuestionModel;
	protected $db;
	
	public function __construct()
    {

      	$this->aboutModel = new AboutModel();
		$this->cookeModel = new CookeModel();
		$this->privacyModel = new PrivacyModel();
		$this->termModel = new TermsModel();
		$this->faqModel = new FaqModel();
		$this->faqQuestionModel = new FaqQuestionModel();
		$this->db      = \Config\Database::connect();
      
    }

	public function aboutPage()
	{

		$getdata= $this->aboutModel->first();
		if (empty($getdata)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $getdata,
            ];

            return $this->response->setJSON($data);
		 }
		
	}

	public function cookePage()
	{

		$getdata= $this->cookeModel->first();
		if (empty($getdata)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $getdata,
            ];

            return $this->response->setJSON($data);
		 }
		
	}


	public function privacyPage()
	{

		$getdata= $this->privacyModel->first();
		if (empty($getdata)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $getdata,
            ];

            return $this->response->setJSON($data);
		 }
		
	}



	public function termsPage()
	{

		$getdata= $this->termModel->first();
		if (empty($getdata)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $getdata,
            ];

            return $this->response->setJSON($data);
		 }
		
	}


	public function faqPage()
	{

		$getdata= $this->faqModel->first();
		if (empty($getdata)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $getdata,
            ];

            return $this->response->setJSON($data);
		 }
		
	}



	public function question()
	{

		$getdata= $this->faqQuestionModel->findAll();
		if (empty($getdata)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $getdata,
                
            ];

            return $this->response->setJSON($data);
		 }
		
	}
}
