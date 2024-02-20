<?php

namespace Modules\Add\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add extends Migration
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

            'image_path' => [
                'type'           => 'text',
            ],

            'pagename' => [
                'type'           => 'text',
            ],

            'link' => [
                'type'           => 'text',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('adds');
    }

    public function down()
    {
        $this->forge->dropTable('adds');
    }
}
