<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLanguages extends Migration
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
				'type'           => 'CHAR',
				'constraint'	 => 49, 
			],

			'lngcode' => [
				'type'			 => 'CHAR',
				'constraint'	 => 2
			]
		]);
		
		$this->forge->addKey('id', true);
		$this->forge->createTable('languages');
	}

	public function down()
	{
		$this->forge->dropTable('languages');
	}
}
