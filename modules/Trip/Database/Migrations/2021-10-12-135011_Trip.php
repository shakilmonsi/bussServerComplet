<?php

namespace Modules\Trip\Database\Migrations;

use CodeIgniter\Database\Migration;

class Trip extends Migration
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

            'fleet_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'schedule_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'pick_location_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'drop_location_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'vehicle_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'distance' => [
                'type'           => 'TINYTEXT',
                'null' => true
            ],

            'startdate' => [
                'type'           => 'datetime',
            ],

            'journey_hour' => [
                'type'           => 'TINYTEXT',
                'null' => true
            ],

            'child_seat' => [
                'type'           => 'TINYTEXT',
                'null' => true
            ],

            'special_seat' => [
                'type'           => 'TINYTEXT',
            ],

            'adult_fair' => [
                'type'           => 'TINYTEXT',
            ],

            'child_fair' => [
                'type'           => 'TINYTEXT',
                'null' => true
            ],

            'special_fair' => [
                'type'           => 'TINYTEXT',
                'null' => true
            ],

            'weekend' => [
                'type'           => 'TINYTEXT',
                'null' => true
            ],

            'company_name' => [
                'type'           => 'TINYTEXT',
            ],

            'stoppage' => [
                'type'           => 'text',
                'null' => true
            ],

            'facility' => [
                'type'           => 'text',
                'null' => true
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
        $this->forge->addForeignKey('fleet_id', 'fleets', 'id');
        $this->forge->addForeignKey('schedule_id', 'schedules', 'id');
        $this->forge->addForeignKey('pick_location_id', 'locations', 'id');
        $this->forge->addForeignKey('drop_location_id', 'locations', 'id');
        $this->forge->addForeignKey('vehicle_id', 'vehicles', 'id');
        $this->forge->createTable('trips');
    }

    public function down()
    {
        $this->forge->dropTable('trips');
    }
}
