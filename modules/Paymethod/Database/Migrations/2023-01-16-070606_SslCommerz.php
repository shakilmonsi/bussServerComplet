<?php

namespace Modules\Paymethod\Database\Migrations;

use CodeIgniter\Database\Migration;

class SslCommerz extends Migration
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

            'ssl_store_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'ssl_store_password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],

            'environment' => [
                'type'          => 'TINYINT'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ssl_commerz');
    }

    public function down()
    {
        $this->forge->dropTable('ssl_commerz');
    }
}
