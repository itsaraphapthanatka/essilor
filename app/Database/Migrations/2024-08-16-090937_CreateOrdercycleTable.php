<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdercycleTable extends Migration
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
            'cyclename' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'cycle_status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'createuser' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'createdate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updateuser' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'updatedate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deluser' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'userdate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ordercycle');
    }

    public function down()
    {
        $this->forge->dropTable('ordercycle');
    }
}
