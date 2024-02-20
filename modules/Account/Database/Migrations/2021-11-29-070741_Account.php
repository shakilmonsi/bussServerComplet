<?php

namespace Modules\Account\Database\Migrations;

use CodeIgniter\Database\Migration;

class Account extends Migration
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
                'null' => true

            ],
            'amount' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'doc_location' => [
                'type'           => 'text',
                'null' => true
            ],
            'system_user_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null' => true
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('accounts');
    }

    public function down()
    {
        $this->forge->dropTable('accounts');
    }
}
