<?php

namespace Modules\Localize\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lngstngvalue extends Migration
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

            'string_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,

            ],

            'localize_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,

            ],

            'value' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'       => true,

            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('string_id', 'langstrings', 'id');
        $this->forge->addForeignKey('localize_id', 'localizes', 'id');
        $this->forge->createTable('lngstngvalues');
    }

    public function down()
    {
        $this->forge->dropTable('lngstngvalues');
    }
}
