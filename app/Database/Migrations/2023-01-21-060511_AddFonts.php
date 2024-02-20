<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFonts extends Migration
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

            'font_name' => [
                'type'           => 'TINYTEXT',
            ],

            'font_display' => [
                'type'           => 'TINYTEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('fonts');
    }

    public function down()
    {
        $this->forge->dropTable('fonts');
    }
}
