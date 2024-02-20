<?php

namespace Modules\Paymethod\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gatewaytotal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],


            'booking_id' => [
                'type'       => 'TINYTEXT',

            ],

            'gateway_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'amount' => [
                'type'           => 'text',
            ],

            'detail' => [
                'type'           => 'text',
                'null' => true
            ],
            'trip_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'subtrip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('gateway_id', 'paymentgateways', 'id');
        $this->forge->addForeignKey('trip_id', 'trips', 'id');
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('gatewaytotals');
    }

    public function down()
    {
        $this->forge->dropTable('gatewaytotals');
    }
}
