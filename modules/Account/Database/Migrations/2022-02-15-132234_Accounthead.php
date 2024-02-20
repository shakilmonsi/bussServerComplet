<?php

namespace Modules\Account\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accounthead extends Migration
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

            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true
            ],

            'parentid' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true
            ],

            'chield' => [
                'type'           => 'INT',
                'null'           => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('accounthead');
    }

    public function down()
    {
        $this->forge->dropTable('accounthead');
    }
}
