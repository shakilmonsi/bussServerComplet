<?php

namespace Modules\Fitness\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fitness extends Migration
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


            'vehicle_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],


            'fitness_name' => [
                'type'    => 'TINYTEXT',
            ],

            'start_date' => [
                'type'    => 'TINYTEXT',
            ],
            'end_date' => [
                'type'    => 'TINYTEXT',
            ],
            'start_milage' => [
                'type'    => 'TINYTEXT',
            ],

            'end_milage' => [
                'type'    => 'TINYTEXT',
                'null' => true,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('fitnesses');
    }

    public function down()
    {
        $this->forge->dropTable('fitnesses');
    }
}
