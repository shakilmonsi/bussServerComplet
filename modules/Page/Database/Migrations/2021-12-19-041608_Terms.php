<?php

namespace Modules\Page\Database\Migrations;

use CodeIgniter\Database\Migration;

class Terms extends Migration
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

            'title' => [
                'type'           => 'TINYTEXT',

            ],
            'sub_title' => [
                'type'           => 'TINYTEXT',
            ],

            'description' => [
                'type'           => 'TEXT',
            ],


            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('terms');
    }

    public function down()
    {
        $this->forge->dropTable('terms');
    }
}
