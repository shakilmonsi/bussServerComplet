<?php

namespace Modules\Ticket\Database\Migrations;

use CodeIgniter\Database\Migration;

class TemporaryBook extends Migration
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
                'unsigned' => true
            ],

            'ticket_token' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'seat_names' => [
                'type' => 'TINYTEXT'
            ],

            'journey_date datetime',
            'created_at datetime default current_timestamp',
            'expires_at datetime',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->createTable('temporarybooks');
    }

    public function down()
    {
        $this->forge->dropTable('temporarybooks');
    }
}
