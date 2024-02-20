<?php

namespace Modules\Ticket\Database\Migrations;

use CodeIgniter\Database\Migration;

class Journeylist extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'  => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'booking_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
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

            'pick_location_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'drop_location_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'pick_stand_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'drop_stand_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],


            'first_name' => [
                'type' => 'TINYTEXT',
            ],
            'last_name' => [
                'type' => 'TINYTEXT',
            ],

            'phone' => [
                'type' => 'TINYTEXT',
                'null' => true,
            ],

            'journeydate' => [
                'type' => 'TINYTEXT',
            ],

            'id_number' => [
                'type' => 'TINYTEXT',
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
        $this->forge->addForeignKey('pick_location_id', 'locations', 'id');
        $this->forge->addForeignKey('drop_location_id', 'locations', 'id');
        $this->forge->addForeignKey('pick_stand_id', 'pickdrops', 'id');
        $this->forge->addForeignKey('drop_stand_id', 'pickdrops', 'id');

        $this->forge->createTable('journeylists');
    }

    public function down()
    {
        $this->forge->dropTable('journeylists');
    }
}
