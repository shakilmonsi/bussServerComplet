<?php

namespace Modules\Coupon\Controllers\Api;

use App\Controllers\BaseController;
use Modules\Coupon\Models\CouponModel;
use CodeIgniter\API\ResponseTrait;

class Coupon extends BaseController
{

	protected $couponModel;
	use ResponseTrait;
	public function __construct()
    {
		$this->couponModel = new CouponModel();
    }


	public function couponValidation($coupon,$subtripId,$journeyDate)
	{
		$journeyDate = date("Y-m-d",strtotime($journeyDate));
		$validDetail = $this->couponModel->where('code',$coupon)
						->where('subtrip_id',$subtripId)
						->where('end_date >=',$journeyDate)
						->where('start_date <=',$journeyDate)
						->findAll();
		
		

		if (count($validDetail) == 0) {
			$data = [
				'status' => "fail",
				'response' => 204,
				'message' =>'coupon is not valid',
				
			];
			return $this->response->setJSON($data);
		}
		else
		{
			$data = [
				'status' => "success",
				'response' => 200,
				'discount' =>$validDetail[0]->discount,
				
			];
	
			return $this->response->setJSON($data);

		}
		
	}
}
