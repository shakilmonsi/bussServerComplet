<?php

namespace Modules\Agent\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'location_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'country_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'user_id' => [
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

            'blood' => [
                'type'           => 'TINYTEXT',
                'null'           => true
            ],

            'id_number' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true
            ],

            'id_type' => [
                'type'           => 'TINYTEXT',
                'null'           => true
            ],

            'nid_picture' => [
                'type'           => 'TINYTEXT',
                'null'           => true
            ],

            'commission' => [
                'type'           => 'TINYTEXT',
            ],

            'profile_picture' => [
                'type'           => 'TINYTEXT',
                'null'           => true
            ],

            'address' => [
                'type'           => 'TINYTEXT',
            ],

            'city' => [
                'type'           => 'TINYTEXT',
                'null'           => true
            ],

            'zip' => [
                'type'           => 'TINYTEXT',
                'null'           => true
            ],

            'discount' => [
                'type'           => 'FLOAT',
                'null'           => true,
                'default'        => 0
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('id_number');
        $this->forge->addForeignKey('location_id', 'locations', 'id');
        $this->forge->addForeignKey('country_id', 'country', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('agents');
    }

    public function down()
    {
        $this->forge->dropTable('agents');
    }
}
