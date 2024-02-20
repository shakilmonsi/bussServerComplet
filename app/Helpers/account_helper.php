<?php

use Modules\Account\Models\AccountModel;
use Modules\Paymethod\Models\PaymethodtotalModel;

function accoutTranjection($type,$detail,$paidamount,$backUserId)
{
    $accountModel = new AccountModel();

    $transaction = array(
        "type" => $type,
        "detail" => $detail,
        "amount" => $paidamount,
        "system_user_id" => $backUserId,
        
     );

     $result = $accountModel->insert($transaction);

     return  $result;

}

function paymethodTeanjection($rand,$paymethod_id,$paidamount,$payDetail,$maitripid,$subtripid,$backUserId)
{
    $paymethodModel = new PaymethodtotalModel();
  
    $transaction = array(
        "booking_id" => $rand,
        "paymethod_id" => $paymethod_id,
        "amount" => $paidamount,
        "detail" => $payDetail,
        "trip_id" => $maitripid,
        "subtrip_id" => $subtripid,
        "user_id" => $backUserId,
        
     );

     $result = $paymethodModel->insert($transaction);

     return  $result;

}

?>