<?php

namespace Modules\Ticket\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ticket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'booking_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],

            'trip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'subtrip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'passanger_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'pick_location_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'drop_location_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'pick_stand_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'drop_stand_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'price' => [
                'type' => 'TINYTEXT',

            ],

            'discount' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'roundtrip_discount' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'totaltax' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'paidamount' => [
                'type' => 'TINYTEXT',
            ],

            'offerer' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'adult' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],
            'chield' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'special' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'seatnumber' => [
                'type' => 'TINYTEXT',
            ],
            'totalseat' => [
                'type' => 'TINYTEXT',
            ],

            'refund' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'bookby_user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'bookby_user_type' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'journeydata' => [
                'type' => 'datetime',
            ],

            'pay_type_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],

            'pay_method_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],

            'payment_status' => [
                'type' => 'TINYTEXT',

            ],

            'vehicle_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'payment_detail' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'cancel_status' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addKey('booking_id', false, true);
        $this->forge->addForeignKey('trip_id', 'trips', 'id');
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->addForeignKey('passanger_id', 'users', 'id');
        $this->forge->addForeignKey('pick_location_id', 'locations', 'id');
        $this->forge->addForeignKey('drop_location_id', 'locations', 'id');
        $this->forge->addForeignKey('pick_stand_id', 'pickdrops', 'id');
        $this->forge->addForeignKey('drop_stand_id', 'pickdrops', 'id');
        $this->forge->addForeignKey('bookby_user_id', 'users', 'id');
        $this->forge->addForeignKey('vehicle_id', 'vehicles', 'id');
        $this->forge->createTable('tickets');
    }

    public function down()
    {
        $this->forge->dropTable('tickets');
    }
}
