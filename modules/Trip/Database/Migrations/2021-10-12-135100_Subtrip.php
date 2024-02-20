<?php

namespace Modules\Trip\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subtrip extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment' => true,
            ],

            'trip_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
            ],

            'pick_location_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
            ],

            'drop_location_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
            ],

            'stoppage' => [
                'type'          => 'text',
                'null'          => true
            ],

            'adult_fair' => [
                'type'          => 'TINYTEXT',
            ],

            'child_fair' => [
                'type'          => 'TINYTEXT',
                'null'          => true
            ],

            'special_fair' => [
                'type'          => 'TINYTEXT',
                'null'          => true
            ],

            'type' => [
                'type'          => 'TINYTEXT',
            ],

            'show' => [
                'type'          => 'TINYTEXT',
                'null'          => true
            ],

            'imglocation' => [
                'type'          => 'TEXT',
                'null'          => true
            ],

            'status' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
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
        $this->forge->createTable('subtrips');
    }

    public function down()
    {
        $this->forge->dropTable('subtrips');
    }
}
