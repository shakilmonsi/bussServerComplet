<?php

namespace Modules\User\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'constraint'     => 11,
                'auto_increment' => true,
            ],

            'login_email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],

            'login_mobile' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],

            'password' => [
                'type'          => 'TINYTEXT',
            ],

            'recovery_code' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'null'          => true
            ],

            'slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => 190
            ],

            'last_login' => [
                'type'          => 'DATETIME',
                'null'          => true
            ],

            'ip' => [
                'type'          => 'TINYTEXT',
                'null'          => true
            ],

            'role_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
            ],

            'status' => [
                'type'          => 'TINYTEXT'
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('login_email', false, true);
        // $this->forge->addKey('login_mobile', false, true);
        $this->forge->addKey('slug', false, true);
        $this->forge->addForeignKey('role_id', 'roles', 'id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
