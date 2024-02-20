<?php

namespace Modules\Ticket\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $protectFields = false;
    protected $allowedFields = [
        'id', 'booking_id', 'trip_id', 'subtrip_id', 'passanger_id', 'pick_location_id', 'drop_location_id', 'pick_stand_id', 'drop_stand_id',
        'price', 'discount', 'totaltax', 'paidamount', 'offerer', 'adult', 'chield', 'special', 'seatnumber', 'totalseat', 'refund', 'bookby_user_id',
        'bookby_user_type', 'journeydata', 'pay_type_id','pay_method_id', 'payment_status', 'vehicle_id', 'payment_detail', 'cancel_status',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = true;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
