<?php

namespace Modules\Employee\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmployeeType extends Migration
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

            'type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],

            'detail' => [
                'type'           => 'text',
            ],


            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('employeetypes');
    }

    public function down()
    {
        $this->forge->dropTable('employeetypes');
    }
}
