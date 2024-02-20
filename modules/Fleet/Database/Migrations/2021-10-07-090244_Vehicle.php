<?php

namespace Modules\Fleet\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vehicle extends Migration
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

            'reg_no' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'            => TRUE
            ],

            'fleet_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,

            ],
            'engine_no' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'model_no' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'chasis_no' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'woner' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'woner_mobile' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'company' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'assign' => [
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
        $this->forge->createTable('vehicles');
    }

    public function down()
    {
        $this->forge->dropTable('vehicles');
    }
}
