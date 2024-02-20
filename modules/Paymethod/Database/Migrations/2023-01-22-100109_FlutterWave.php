<?php

namespace Modules\Paymethod\Database\Migrations;

use CodeIgniter\Database\Migration;

class FlutterWave extends Migration
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

            'live_public_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'live_secret_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'live_encryption_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'test_public_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'test_secret_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'test_encryption_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'environment' => [
                'type'           => 'TINYINT'
            ],

            'created_at datetime default current_timestamp',
            
            'updated_at datetime default current_timestamp on update current_timestamp',
            
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('flutterwaves');
    }

    public function down()
    {
        $this->forge->dropTable('flutterwaves');
    }
}
