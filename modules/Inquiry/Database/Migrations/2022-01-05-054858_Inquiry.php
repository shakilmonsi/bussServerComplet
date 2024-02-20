<?php

namespace Modules\Inquiry\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inquiry extends Migration
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

            'mobile' => [
                'type' => 'tinytext',
            ],

            'subject' => [
                'type'  => 'tinytext',
            ],

            'message' => [
                'type' => 'text',
            ],
            'email' => [
                'type'   => 'tinytext',
            ],
            'name' => [
                'type'   => 'tinytext',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('inquiries');
    }

    public function down()
    {
        $this->forge->dropTable('inquiries');
    }
}
