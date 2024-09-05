<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserOnlineTable extends Migration
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
            'uid' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'last_login' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'latitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'longtitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user_online');
    }

    public function down()
    {
        $this->forge->dropTable('user_online');
    }
}
