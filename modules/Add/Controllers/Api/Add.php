<?php

namespace Modules\Add\Controllers\Api;

use App\Controllers\BaseController;

use CodeIgniter\API\ResponseTrait;
use Modules\Add\Models\AddModel;

class Add extends BaseController
{

	private $addModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->addModel = new AddModel();
    }
	public function index()
	{
		$add	= $this->addModel->findAll();
		if (empty($add)) {
			$data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
		}
		 else 
		 {

			foreach ($add as $key => $value) {
				
				$add[$key]->image_path = base_url().'/public/'.$value->image_path;
			}

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $add,
            ];

            return $this->response->setJSON($data);
		 }
		
	}
}
