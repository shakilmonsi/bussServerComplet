<?php

namespace Modules\Employee\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employee extends Migration
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

            'employeetype_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'country_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'first_name' => [
                'type'           => 'TINYTEXT',
            ],

            'last_name' => [
                'type'           => 'TINYTEXT',
            ],

            'phone' => [
                'type'           => 'TINYTEXT',
            ],

            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],

            'blood' => [
                'type'           => 'TINYTEXT',
            ],

            'id_type' =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true
            ],

            'nid' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true
            ],

            'nid_picture' => [
                'type'           => 'TINYTEXT',
            ],

            'profile_picture' => [
                'type'           => 'TINYTEXT',
            ],

            'address' => [
                'type'           => 'TINYTEXT',
            ],

            'city' => [
                'type'           => 'TINYTEXT',
            ],

            'zip' => [
                'type'           => 'TINYTEXT',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('nid');
        $this->forge->addForeignKey('employeetype_id', 'employeetypes', 'id');
        $this->forge->addForeignKey('country_id', 'country', 'id');
        $this->forge->createTable('employees');
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
