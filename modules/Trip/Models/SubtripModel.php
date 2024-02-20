<?php

namespace Modules\Trip\Models;

use CodeIgniter\Model;
use stdClass;

class SubtripModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'subtrips';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'trip_id', 'pick_location_id', 'drop_location_id', 'stoppage', 'adult_fair', 'child_fair', 'special_fair', 'type', 'status', 'show', 'imglocation'];

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

    public function getGroup(): array
    {
        $subtrips = $this->select('subtrips.type, subtrips.trip_id')->findAll();

        return array_values(array_reduce($subtrips, function ($accumulator, $item) {
            if ($item->type == 'main') {
                $trip_id = $item->trip_id;

                // take the children if you already have 
                $children = ($accumulator[$trip_id])->children ?? [];

                $item->children = $children;
                $accumulator[$trip_id] = $item;
                return $accumulator;
            }

            // add a new parent if you haven't already 
            $parent = $item->trip_id;
            if (!isset($accumulator[$parent])) {
                // how did you find the dad will first add only with children 
                $c = new stdClass;
                $c->children = [$item];

                $accumulator[$parent] = $c;
                return $accumulator;
            }

            ($accumulator[$parent])->children[] = $item;
            return $accumulator;
        }, []));
    }

    public function withLocations(): SubtripModel
    {
        return $this
            ->select('l1.name AS picklocation, l2.name AS droplocation')
            ->join('locations l1', 'subtrips.pick_location_id = l1.id')
            ->join('locations l2', 'subtrips.drop_location_id = l2.id')
            ->where('l1.deleted_at IS NULL')
            ->where('l2.deleted_at IS NULL');
    }

    public function active(): SubtripModel
    {
        return $this->where('subtrips.status = 1');
    }
}
