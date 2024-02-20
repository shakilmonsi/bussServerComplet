<?php

namespace Modules\Coupon\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coupondiscount extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id'  => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'code' => [
                'type'    => 'TINYTEXT',
            ],
            'coupon_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],


            'booking_id' => [
                'type'    => 'TINYTEXT',
            ],

            'subtrip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'amount' => [
                'type'    => 'TINYTEXT',
            ],


            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('coupon_id', 'coupons', 'id');
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->createTable('coupondiscounts');
    }

    public function down()
    {
        $this->forge->dropTable('coupondiscounts');
    }
}
