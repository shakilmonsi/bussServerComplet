<?php

namespace Modules\Website\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Website\Models\SocialmediaModel;

class Socialmedia extends BaseController
{

	private $socialModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->socialModel = new SocialmediaModel();
    }

	public function index()
	{
		$social	= $this->socialModel->findAll();
		if (empty($social)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			foreach ($social as $key => $value) {
				
				$social[$key]->image_path = base_url().'/public/'.$value->image_path;
			}

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $social,
            ];

            return $this->response->setJSON($data);
		 }
		
	}
}
