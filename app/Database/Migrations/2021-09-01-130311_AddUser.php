<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
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
			'login_email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'unique'         => true,
			],
			'login_mobile' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'unique'         => true,
			],
			'password' => [
				'type' => 'text',

			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'unique'     => true,
			],
			'recovery_code' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true

			],
			'last_login' => [
				'type' => 'VARCHAR',
				'constraint' => '100',

			],
			'ip' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true

			],
			'role' => [
				'type' => 'INT',
				'constraint' => 11,

			],
			'status' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at' => [
				'type' => 'datetime',
				'null' => true
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
