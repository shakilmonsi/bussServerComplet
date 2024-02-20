<?php

use Modules\Account\Models\PayagentModel;
use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;
use Modules\Agent\Models\AgenttotalModel;

 function agentCommission($totalprice,$agent_id)
    {
        $agentModel = new AgentModel();
        $userId = $agent_id;
        $agetnDetail =  $agentModel->where('user_id',$userId)->first();
        (double)$commission = (double)(($totalprice)* ($agetnDetail->commission/100));
        return $commission;

    }


    function agentIncomeCommission($agent_id,$totalprice,$rand,$subtripid,$passanger_id,$message)
    {
        (double) $commission =  agentCommission($totalprice, $agent_id);
        $agentModel = new AgentModel();
        $agentcommissionModel = new Agentcommission();
        $payAgentModel = new PayagentModel();
        $currentdate = date('Y-m-d');
        $agentid = $agent_id;
        $agetnDetail =  $agentModel->where('user_id', $agentid )->first();

        $agentcommission = array(
            "booking_id" => $rand,
            "subtrip_id" => $subtripid,
            "agent_id" => $agetnDetail->id,
            "user_id" => $passanger_id,  
            "grandtotal" => $totalprice,
            "commission" => $commission,
            "rate" => $agetnDetail->commission,
            "detail" => $message,
            "date" => $currentdate,
         );

         $payAgent = array(   
            "agent_id" => $agetnDetail->id,
            "amount" => $commission,
            "status" => 1,
            "approved_id" => 1,
         );

         $data['result'] =  $agentcommissionModel->insert($agentcommission);
         $data['payAgentResult'] =  $payAgentModel->insert($payAgent);

        return $data;

    }
    
    function agentTotal($agent_id,$totalAmount,$rand,$type,$payment_detail_rocord)
    {
        $agentModel = new AgentModel();
        $agentTotalModel = new AgenttotalModel();

        $agentid = $agent_id;
        $agetnDetail =  $agentModel->where('user_id', $agentid )->first();

        if($type == "income")
        {
            $agentTotal = array(
                "agent_id" =>$agetnDetail->id, 
                "booking_id" => $rand,
                "income" => $totalAmount,
                "expense" => 0,  
                "detail" => $payment_detail_rocord,
                
             );

        }
        elseif($type == "expense")
        {

            $agentTotal = array(
                "agent_id" =>$agetnDetail->id, 
                "booking_id" => $rand,
                "income" => 0,
                "expense" => $totalAmount, 
                "detail" => $payment_detail_rocord,
                
             );

        }

        

        $result =  $agentTotalModel->insert($agentTotal);

        return $result;

    }



    function agentTotalNormal($agent_id,$totalAmount,$type,$payment_detail_rocord)
    {
        $agentModel = new AgentModel();
        $agentTotalModel = new AgenttotalModel();

        $agentid = $agent_id;
        $agetnDetail =  $agentModel->where('user_id', $agentid )->first();
        $agentTotal = array();

        if($type == "income")
        {
            $agentTotal = array(
                "agent_id" =>$agetnDetail->id, 
                // "booking_id" =>null ,
                "income" => $totalAmount,
                "expense" => 0,  
                "detail" => $payment_detail_rocord,
                
             );

        }
        elseif($type == "expense")
        {

            $agentTotal = array(
                "agent_id" =>$agetnDetail->id, 
                // "booking_id" =>null,
                "income" => 0,
                "expense" => $totalAmount, 
                "detail" => $payment_detail_rocord,
                
             );

        }
        
        
        $result =  $agentTotalModel->insert($agentTotal);

        return $result;

    }
?>