<?php

namespace Modules\Blog\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
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

            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'description' => [
                'type'           => 'TEXT',
            ],

            'image' => [
                'type' => 'text',
            ],

            'serial' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('blogs');
    }

    public function down()
    {
        $this->forge->dropTable('blogs');
    }
}
