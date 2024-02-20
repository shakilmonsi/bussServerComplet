<?php

namespace Modules\Website\Models;

use CodeIgniter\Model;

class WebsettingModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'websettings';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = [	
										'id','localize_name','headerlogo','favicon','footerlogo',
										'logotext','apptitle','copyright','headercolor','footercolor',
										'buttoncolor','buttoncolorhover','buttontextcolor','fontfamely',
										'bottomfooterlogo','tax_type','bottomfootercolor','country',
										'timezone','max_ticket','currency'
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
