<?php

namespace Modules\Tax\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tax extends Migration
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

            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'tax_reg' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],


            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'value' => [
                'type' => 'text',

            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('taxes');
    }

    public function down()
    {
        $this->forge->dropTable('taxes');
    }
}
