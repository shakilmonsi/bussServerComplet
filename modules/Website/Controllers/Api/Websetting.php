<?php

namespace Modules\Website\Controllers\Api;

use App\Controllers\BaseController;
use Modules\Website\Models\WebsettingModel;
use CodeIgniter\API\ResponseTrait;

class Websetting extends BaseController
{

	protected $webSettingModel;
	protected $db;
	use ResponseTrait;

	public function __construct()
    {

        $this->Viewpath = "Modules\Website\Views";
		$this->webSettingModel = new WebsettingModel();
		$this->db      = \Config\Database::connect();
      
    }

	public function index()
	{
		

		$websetting	= $this->webSettingModel->first();
		if (empty($websetting)) {
			$data = [
                'message' => "No Setting found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
		}

		else
		{

			$currencybuilder = $this->db->table('currencies');
			$curencyquery = $currencybuilder->where('id',$websetting->currency)->get();
			$currency = $curencyquery->getResult();

			$result = array();
			$result['language'] = $websetting->localize_name;
			$result['app_lang'] = $this->session->get('lang') ?: $websetting->localize_name;
			$result['headerlogo'] = base_url().'/public/'. $websetting->headerlogo;
			$result['favicon'] = base_url().'/public/'. $websetting->favicon;
			$result['footerlogo'] = base_url().'/public/'. $websetting->footerlogo;
			$result['logotext'] = $websetting->logotext;
			$result['apptitle'] = $websetting->apptitle;
			$result['copyright'] = $websetting->copyright;
			$result['headercolor'] = $websetting->headercolor;
			$result['footercolor'] = $websetting->footercolor;
			$result['bottomfootercolor'] = $websetting->bottomfootercolor;
			$result['buttoncolor'] = $websetting->buttoncolor;
			$result['buttoncolorhover'] = $websetting->buttoncolorhover;
			$result['buttontextcolor'] = $websetting->buttontextcolor;
			$result['fontfamely'] = $websetting->fontfamely;
			$result['tax_type'] = $websetting->tax_type;

			$result['max_ticket'] = $websetting->max_ticket;
			$result['country'] = $websetting->country;
			$result['timezone'] = $websetting->timezone;
			
			$result['currency_country'] = $currency[0]->country;
			$result['currency_code'] = $currency[0]->code;
			$result['currency_symbol'] = $currency[0]->symbol;
			

			$data = [
                'status' => "success",
                'response' => 200,
                'data' => $result,
            ];

            return $this->response->setJSON($data);

		}
	}
}
