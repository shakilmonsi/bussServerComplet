<?php

namespace Modules\Role\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permission extends Migration
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

            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],


            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],


            'menu_id' => [
                'type'     => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'menu_title' => [
                'type'  => 'TINYTEXT',
                'null' => true
            ],

            'create' => [
                'type'   => 'TINYTEXT',
                'null' => true
            ],
            'read' => [
                'type'    => 'TINYTEXT',
                'null' => true
            ],

            'edit' => [
                'type'   => 'TINYTEXT',
                'null' => true
            ],

            'delete' => [
                'type'   => 'TINYTEXT',
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
        $this->forge->addForeignKey('role_id', 'roles', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('menu_id', 'menus', 'id');
        $this->forge->createTable('permissions');
    }

    public function down()
    {
        $this->forge->dropTable('permissions');
    }
}
