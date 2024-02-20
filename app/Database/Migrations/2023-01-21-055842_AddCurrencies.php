<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCurrencies extends Migration
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

            'country' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],

            'currency' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],

            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 4
            ],

            'minor_unit' => [
                'type' => 'SMALLINT',
            ],

            'symbol' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('currencies');
    }

    public function down()
    {
        $this->forge->dropTable('currencies');
    }
}
