<?php

namespace Modules\Website\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Website\Models\FooterModel;

class Footer extends BaseController
{
	private $footerModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->footerModel = new FooterModel();
    }

	public function index()
	{
		$footer	= $this->footerModel->findAll();
		if (empty($footer)) {
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
                'data' => $footer,
            ];

            return $this->response->setJSON($data);
		 }
		
	}
}
