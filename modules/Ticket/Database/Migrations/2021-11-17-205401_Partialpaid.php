<?php

namespace Modules\Ticket\Database\Migrations;

use CodeIgniter\Database\Migration;

class Partialpaid extends Migration
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

            'booking_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
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

            'paidamount' => [
                'type' => 'TINYTEXT',
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

            'payment_detail' => [
                'type' => 'TINYTEXT',
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
        $this->forge->addForeignKey('trip_id', 'trips', 'id');
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->addForeignKey('passanger_id', 'users', 'id');

        $this->forge->createTable('partialpaids');
    }

    public function down()
    {
        $this->forge->dropTable('partialpaids');
    }
}
