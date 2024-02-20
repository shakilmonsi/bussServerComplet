<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
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
            'user_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,

            ],
            'title'       => [
                'type'       => 'text',
            ],
            'description' => [
                'type' => 'text',
            ],
            'image' => [
                'type' => 'text',
            ],
            'serial' => [
                'type'      => 'INT',
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
        $this->forge->addForeignKey('user_id', 'user', 'id');
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
