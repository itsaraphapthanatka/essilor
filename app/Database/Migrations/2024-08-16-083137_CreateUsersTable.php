<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
            'user_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'user_email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'user_password' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false,
            ],
            'user_created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => null,
                'on_update' => 'CURRENT_TIMESTAMP',
            ],
            'user_img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'default' => null,
            ],
            'user_role' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'default' => null,
                'collation' => 'utf8mb3_general_ci',
            ],
            'user_branch' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
                'default' => null,
            ],
            'user_position' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'default' => null,
            ],
            'compcode' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
                'default' => null,
            ],
            'mobile' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
                'default' => null,
            ],
            'user_status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
                'default' => null,
            ],
            'prekey' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
                'default' => null,
            ],
            'line_auth' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'default' => null,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
