<?php

namespace Modules\Rating\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rating extends Migration
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
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'trip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'subtrip_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'booking_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'         => true,
            ],

            'comments' => [
                'type'   => 'text',
                'null' => true
            ],

            'rating' => [
                'type'   => 'DOUBLE',

            ],

            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('trip_id', 'trips', 'id');
        $this->forge->addForeignKey('subtrip_id', 'subtrips', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('ratings');
    }

    public function down()
    {
        $this->forge->dropTable('ratings');
    }
}
