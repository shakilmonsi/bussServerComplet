<?php

namespace Modules\Trip\Models;

use CodeIgniter\Model;

class TripModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'trips';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['id','fleet_id','schedule_id','pick_location_id','drop_location_id','vehicle_id','distance','journey_hour','special_seat','child_seat','adult_fair','child_fair','special_fair','weekend','stoppage','company_name','status','startdate','facility'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];


	// protected function addlocationName(array $data)
	// {
	// 	$test = '';
	// 	$db      = \Config\Database::connect();
	// 	$location = $db->table('locations')->get()->getResult();
		
		

	// 	foreach ($data['data'] as $key => $value) {
	// 		foreach ($location as $newlocation) {

	// 			if ($data['data'][$key]->pick_location_id == $newlocation->id) {
	// 				$data['data'][$key]->pick_location_id  = $newlocation->name;
	// 			}

	// 			if ($data['data'][$key]->drop_location_id == $newlocation->id) {
	// 				$data['data'][$key]->drop_location_id  = $newlocation->name;
	// 			}
		
	// 		}
			
	// 	}
		
	// 	return $data;
	// }
}
