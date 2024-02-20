<?php

namespace Modules\Inquiry\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Inquiry\Models\InquiryModle;

class Inquiry extends BaseController
{
	private $inquiryModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->inquiryModel = new InquiryModle();
    }

	public function create()
	{

		
		$validatedata= array(
			"mobile"=> $this->request->getVar('mobile'),
			"subject"=> $this->request->getVar('subject'),
			"message"=> $this->request->getVar('message'),
			"name"=> $this->request->getVar('name'),
		);
		$insertdata= array(
			"mobile"=> $this->request->getVar('mobile'),
			"subject"=> $this->request->getVar('subject'),
			"message"=> $this->request->getVar('message'),
			"name"=> $this->request->getVar('name'),
			"email"=> $this->request->getVar('email'),
		);

		
		if($this->validation->run($validatedata, 'inquiry'))
		{
			
			$this->inquiryModel->insert($insertdata);

			$data = [

                'status' => "success",
                'response' => 200,
                'data' => $insertdata,
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
