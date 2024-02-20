<?php

namespace Modules\Agent\Models;

use CodeIgniter\Model;

class AgentModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'agents';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'id',
		'location_id',
		'country_id',
		'user_id',
		'first_name',
		'last_name',
		'id_number',
		'blood',
		'id_type',
		'nid_picture',
		'commission',
		'profile_picture',
		'address',
		'city',
		'zip',
		'discount',
		'deleted_at'
	];

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
}
