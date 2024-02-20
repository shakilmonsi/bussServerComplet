<?php

namespace Modules\Trip\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stuffassign extends Migration
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

            'trip_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'employee_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'employee_type' => [
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
        $this->forge->addForeignKey('trip_id', 'trips', 'id');
        $this->forge->addForeignKey('employee_id', 'employees', 'id');
        $this->forge->createTable('stuffassigns');
    }

    public function down()
    {
        $this->forge->dropTable('stuffassigns');
    }
}
