<?php


namespace App\Libraries;
use Firebase\JWT\JWT;
use CodeIgniter\API\ResponseTrait;

use Exception;

Class Tokenjwt

{
    use ResponseTrait;
    

    public function __construct()
    {
         $this->request = \Config\Services::request();
    }



    public function generateToken($slugid)
    {
       
        
        $key = getenv('TOKEN_SECRET');
        $iat = time(); // current timestamp value
        $nbf = $iat +0.1;
        $exp = $iat + 3600;

        $payload = array(
            "iss" => "The_claim",
            "aud" => "The_Aud",
            "iat" => $iat, // issued at
            "nbf" => $nbf, //not before in seconds
            "exp" => $exp, // expire time in seconds
            "slug" => $slugid,
        );

        $token = JWT::encode($payload, $key);

        // return "Bearer ".$token;
        return $token;
        
    }

    public function tokencheck()
    {  

		$header = $this->request->getServer('HTTP_AUTHORIZATION');

        if(!$header)
        {
           
            return $this->failUnauthorized('Token Required');
        } 
        
     

        else
        {

            // // if (substr($header, 0, 7) !== 'Bearer ') {
            // //     return false;
            // // }
    
            // $token =  trim(substr($header, 7));

            // $tokennew =  str_replace("Bearer ","",$token);
            
    
            // return $tokennew;
    
            $token = explode(' ', $header)[1];
            $token = $token;
            return $token;
           

            
        }
        
        
    }
    


}




?>