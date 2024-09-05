<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'role_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'role_status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'create_user' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'create_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'edit_user' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'edit_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'del_user' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'del_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('role');
    }

    public function down()
    {
        $this->forge->dropTable('role');
    }
}
