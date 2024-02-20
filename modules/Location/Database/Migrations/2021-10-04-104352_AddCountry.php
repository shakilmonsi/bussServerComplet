<?php

namespace Modules\Location\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCountry extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'iso' => [
                'type' => 'CHAR',
                'constraint' => 2
            ],

            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 80
            ],

            'nicename' => [
                'type' => 'VARCHAR',
                'constraint' => 80
            ],

            'iso3' => [
                'type' => 'CHAR',
                'constraint' => 3,
                'null' => true
            ],

            'numcode' => [
                'type' => 'SMALLINT',
                'null' => true
            ],

            'phonecode' => [
                'type' => 'INT'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('country');
    }

    public function down()
    {
        $this->forge->dropTable('country');
    }
}
