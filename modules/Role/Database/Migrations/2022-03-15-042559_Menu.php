<?php

namespace Modules\Role\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
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

            'menu_title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'page_url' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'module_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'parent_menu_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,

            ],

            'have_chield' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],

            'created_by' => [
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
        $this->forge->createTable('menus');
    }

    public function down()
    {
        $this->forge->dropTable('menus');
    }
}
