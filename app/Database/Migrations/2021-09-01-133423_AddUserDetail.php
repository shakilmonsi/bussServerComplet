<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserDetail extends Migration
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

            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'last_name' => [
                'type' => 'text',
                'constraint' => '100',
            ],

            'id_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],

            'id_type' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'image' => [
                'type' => 'text',
                'null' => true
            ],

            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],

            'country' => [
                'type' => 'INT',
                'constraint' => 11,
            ],

            'city' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],

            'zip_code' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
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
        $this->forge->addForeignKey('user_id', 'user', 'id');
        $this->forge->createTable('user_detail');
    }

    public function down()
    {
        $this->forge->dropTable('user_detail');
    }
}
