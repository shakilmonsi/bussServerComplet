<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimezone extends Migration
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

            'country_code' => [
                'type'           => 'CHAR',
                'constraint'     => 3
            ],

            'timezone' => [
                'type'           => 'VARCHAR',
                'constraint'     => 125
            ],

            'gmt_offset' => [
                'type'           => 'FLOAT',
                'constraint'     => '10,2',
                'null'           => true
            ],

            'dst_offset' => [
                'type'           => 'FLOAT',
                'constraint'     => '10,2',
                'null'           => true
            ],

            'raw_offset' => [
                'type'           => 'FLOAT',
                'constraint'     => '10,2',
                'null'           => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('timezone');
    }

    public function down()
    {
        $this->forge->dropTable('timezone');
    }
}
