<?php

namespace Modules\Account\Libraries;


Class Bookby

{
    public $db;
    protected $Viewpath;

    public function __construct()
    {

        $this->db = \Config\Database::connect();
        $this->Viewpath = "Modules\Account\Views";
    }
    public function bookbyBackend($id)
    {
       
        $builder =$this->db->table('user_details');
		$query   = $builder->where('user_id',$id)->get(); 
		$data = $query->getRow();
        
        $name = "<b>".$data->first_name .' '. $data->last_name."</b>";
        // dd( $name);
       return view($name);
        // return $name;
                          
        
    }

   
   


}




?>