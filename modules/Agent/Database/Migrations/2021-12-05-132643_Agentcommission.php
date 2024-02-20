<?php

namespace Modules\Agent\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agentcommission extends Migration
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

            'agent_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'booking_id' => [
                'type'           => 'TINYTEXT',
            ],

            'subtrip_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'grandtotal' => [
                'type'           => 'TINYTEXT',
            ],
            'commission' => [
                'type'           => 'TINYTEXT',
            ],
            'rate' => [
                'type'           => 'TINYTEXT',
            ],

            'detail' => [
                'type'           => 'TINYTEXT',
            ],

            'date' => [
                'type'           => 'TINYTEXT',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('agent_id', 'agents', 'id');
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('agentcommissions');
    }

    public function down()
    {
        $this->forge->dropTable('agentcommissions');
    }
}
