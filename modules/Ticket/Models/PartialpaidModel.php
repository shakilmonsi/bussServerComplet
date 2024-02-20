<?php

namespace Modules\Ticket\Models;

use CodeIgniter\Model;

class PartialpaidModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'partialpaids';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = ['id', 'booking_id', 'trip_id', 'subtrip_id', 'passanger_id', 'paidamount', 'pay_type_id', 'pay_method_id', 'payment_detail'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
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

    public function getPartialPayments(string $booking_id): array
    {
        return $this->select('u.first_name, u.last_name, pm.name AS name,  pg.name AS gatewayname, partialpaids.created_at as date, partialpaids.*')
            // join with user_details table
            ->join('user_details u', 'u.user_id = partialpaids.passanger_id')

            // join with paymethods table
            ->join('paymethods pm', 'pm.id = partialpaids.pay_type_id', 'LEFT')

            // join with payementgateways table
            ->join('paymentgateways pg', 'pg.id = partialpaids.pay_method_id', 'LEFT')

            // filter result
            ->where('partialpaids.booking_id', $booking_id)
            ->where('partialpaids.paidamount > 0')

            // find rows
            ->withDeleted()
            ->findAll();
    }
}
