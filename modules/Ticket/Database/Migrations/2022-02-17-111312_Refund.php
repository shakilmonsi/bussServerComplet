<?php

namespace Modules\Ticket\Database\Migrations;

use CodeIgniter\Database\Migration;

class Refund extends Migration
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

            'refund_fee' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],

            'pay_type_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],

            'track_table_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],

            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '100',

            ],

            'detail' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'refund_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],


            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('refund_by', 'users', 'id');
        $this->forge->createTable('refunds');
    }

    public function down()
    {
        $this->forge->dropTable('refunds');
    }
}
