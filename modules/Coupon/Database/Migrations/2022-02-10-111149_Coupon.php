<?php

namespace Modules\Coupon\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coupon extends Migration
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

            'subtrip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'code' => [
                'type'    => 'TINYTEXT',
            ],

            'start_date' => [
                'type'    => 'TINYTEXT',
            ],
            'end_date' => [
                'type'    => 'TINYTEXT',
            ],
            'discount' => [
                'type'    => 'TINYTEXT',
            ],

            'condition' => [
                'type'    => 'TINYTEXT',
                'null' => true,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('coupons');
    }

    public function down()
    {
        $this->forge->dropTable('coupons');
    }
}
