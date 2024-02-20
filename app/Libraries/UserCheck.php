<?php

namespace App\Libraries;
use Modules\Agent\Models\AgentModel;

Class UserCheck

{
    
    protected $agenttModel;

    public function __construct()
    {

        $this->agenttModel = new AgentModel(); 
        
    }
    public function getUserType()
    {
        $session = session();
       $userID = "";
        $roleId= $session->get('role_id');

        if ($roleId == 1) {
            $userID = 1;
        }
        if ($roleId == 2) {
            $userID = 2;
        }

        return $userID;
        
    }

    

   
    


}




?>