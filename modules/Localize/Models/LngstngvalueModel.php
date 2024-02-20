<?php

namespace Modules\Localize\Models;

use CodeIgniter\Model;

class LngstngvalueModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'lngstngvalues';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'string_id', 'localize_id', 'value'];

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

    public function upsertLangStringVal($stringId, $localizeId, $value)
    {
        $existingRecord = $this->where('string_id', $stringId)
            ->where('localize_id', $localizeId)
            ->first();

        if ($existingRecord) {
            // Record exists, update the value
            $this->update($existingRecord->id, ['value' => $value]);
        } else {
            // Record does not exist, insert a new one
            $this->insert(['string_id' => $stringId, 'localize_id' => $localizeId, 'value' => $value]);
        }
    }
}
