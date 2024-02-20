<?php

namespace Modules\Fleet\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fleet extends Migration
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

            'type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'layout' => [
                'type'           => 'text',

            ],
            'last_seat' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'total_seat' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'seat_number' => [
                'type'           => 'text',

            ],

            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],


            'luggage_service' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('fleets');
    }

    public function down()
    {
        $this->forge->dropTable('fleets');
    }
}
