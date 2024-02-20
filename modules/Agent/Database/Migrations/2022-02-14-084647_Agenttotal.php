<?php

namespace Modules\Agent\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenttotal extends Migration
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
                'type'   => 'text',
                'null' => true
            ],

            'income' => [
                'type'           => 'text',
                'null' => true
            ],
            'expense' => [
                'type'           => 'text',
                'null' => true
            ],

            'detail' => [
                'type'           => 'text',
                'null' => true

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
        $this->forge->createTable('agenttotals');
    }

    public function down()
    {
        $this->forge->dropTable('agenttotals');
    }
}
