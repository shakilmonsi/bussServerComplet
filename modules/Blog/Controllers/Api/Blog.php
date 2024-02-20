<?php

namespace Modules\Blog\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Blog\Models\BlogModel;

class Blog extends BaseController
{
    private $blogModel;
    use ResponseTrait;

    public function __construct()
    {

        $this->blogModel = new BlogModel();
    }

    public function index()
    {

        $blogs = $this->blogModel->findAll();

        if (!empty($blogs)) {

            foreach ($blogs as $key => $value) {
                $value->image = base_url().'/public/'.$value->image;
            }

            $data = [

                'status' => "success",
                'response' => 200,
                'data' => $blogs,
            ];

            return $this->response->setJSON($data);

        } else {

             $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

    }
    public function singleBlog($id)
    {

        $blogs = $this->blogModel->find($id);

        if (!empty($blogs)) {

            $blogs->image = base_url().'/public/'.$blogs->image;

            $data = [

                'status' => "success",
                'response' => 200,
                'data' => $blogs,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

    }

}
