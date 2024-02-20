<?php

namespace Modules\Ticket\Database\Migrations;

use CodeIgniter\Database\Migration;

class Maxtime extends Migration
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

            'maxtime' => [
                'type'    => 'TINYTEXT',

            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('maxtimes');
    }

    public function down()
    {
        $this->forge->dropTable('maxtimes');
    }
}
