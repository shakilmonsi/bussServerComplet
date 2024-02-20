<?php

namespace Modules\Website\Database\Migrations;

use CodeIgniter\Database\Migration;

class Email extends Migration
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

            'protocol' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'smtphost' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'smtpuser' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'smtppass' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'smtpport' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'smtpcrypto' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('emails');
    }

    public function down()
    {
		$this->forge->dropTable('emails');
    }
}
