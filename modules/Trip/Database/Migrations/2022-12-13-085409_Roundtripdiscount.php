<?php

namespace Modules\Trip\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roundtripdiscount extends Migration
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
                'type' => 'text',
                'null' => true
            ],
            'discountrate' => [
                'type'     => 'INT',
                'constraint'  => 11,
            ],

            'status' => [
                'type'     => 'INT',
                'constraint'  => 11,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('roundtripdiscounds');
    }

    public function down()
    {
        $this->forge->dropTable('roundtripdiscounds');
    }
}
