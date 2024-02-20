<?php

namespace Modules\Website\Database\Migrations;

use CodeIgniter\Database\Migration;

class Footer extends Migration
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

            'contact' => [
                'type'           => 'text',
            ],
            'email' => [
                'type'           => 'tinytext',
            ],

            'opentime' => [
                'type'           => 'text',
            ],
            'address' => [
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
        $this->forge->createTable('footers');
    }

    public function down()
    {
		$this->forge->dropTable('footers');
    }
}
