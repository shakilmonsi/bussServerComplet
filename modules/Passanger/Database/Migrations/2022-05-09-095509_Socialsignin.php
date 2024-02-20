<?php

namespace Modules\Passanger\Database\Migrations;

use CodeIgniter\Database\Migration;

class Socialsignin extends Migration
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

            'appid' => [
                'type'           => 'TINYTEXT',
            ],

            'email' => [
                'type'           => 'TINYTEXT',
            ],

            'other' => [
                'type'           => 'TEXT',
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
        $this->forge->createTable('socialsignins');
    }


    public function down()
    {
        $this->forge->dropTable('socialsignins');
    }
}
