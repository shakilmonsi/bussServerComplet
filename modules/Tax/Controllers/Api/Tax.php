<?php

namespace Modules\Tax\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Tax\Models\TaxModel;
use Modules\Website\Models\WebsettingModel;


class Tax extends BaseController
{
	private $taxModel;
    use ResponseTrait;
    protected $webSettingModel;

    public function __construct()
    {

        $this->taxModel = new TaxModel();
        $this->webSettingModel = new WebsettingModel();
    }

	public function index()
    {

        $taxs = $this->taxModel->where('status',1)->findAll();

        $websetting	= $this->webSettingModel->first();


        if (empty($websetting)) {
			$tax_type = Null;
		}

        else
        {
            $tax_type = $websetting->tax_type;
        }

        if (!empty($taxs)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'tax_type' => $tax_type,
                'data' => $taxs,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "Tax data not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }

    }


    public function name()
    {
        $data = [
            'message' => "Tax data not found.",
            'status' => "failed",
            'response' => 204,
        ];

        return $this->response->setJSON($data);
    }
}
