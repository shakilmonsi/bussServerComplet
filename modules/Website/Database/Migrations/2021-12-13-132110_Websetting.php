<?php

namespace Modules\Website\Database\Migrations;

use CodeIgniter\Database\Migration;

class Websetting extends Migration
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

            'localize_name' => [
                'type'           => 'text',
            ],

            'headerlogo' => [
                'type'           => 'text',
            ],

            'favicon' => [
                'type'           => 'text',
            ],

            'footerlogo' => [
                'type'           => 'text',
            ],


            'logotext' => [
                'type' => 'text',
            ],
            'apptitle' => [
                'type' => 'text',
            ],
            'copyright' => [
                'type' => 'text',
            ],
            'headercolor' => [
                'type' => 'text',
            ],
            'footercolor' => [
                'type' => 'text',
            ],

            'bottomfootercolor' => [
                'type' => 'text',
            ],

            'buttoncolor' => [
                'type' => 'text',
            ],
            'buttoncolorhover' => [
                'type' => 'text',
            ],
            'buttontextcolor' => [
                'type' => 'text',
            ],
            'fontfamely' => [
                'type' => 'text',
            ],

            'tax_type' => [
                'type' => 'text',
            ],

            'country' => [
                'type'  => 'INT',
                'constraint' => 11,
                'null' => true
            ],

            'timezone' => [
                'type' => 'text',
                'null' => true
            ],

            'max_ticket' => [
                'type'  => 'INT',
                'constraint' => 11,

            ],

            'currency' => [
                'type'  => 'INT',
                'constraint' => 11,

            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('websettings');
    }

    public function down()
    {
		$this->forge->dropTable('websettings');
    }
}
