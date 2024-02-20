<?php

namespace Modules\Account\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payagent extends Migration
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
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'amount' => [
                'type'  => 'text',
                'null' => true

            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null' => true
            ],

            'approved_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
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
        $this->forge->addForeignKey('agent_id', 'agents', 'id');
        $this->forge->createTable('payagents');
    }

    public function down()
    {
        $this->forge->dropTable('payagents');
    }
}
