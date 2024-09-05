<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJobstatusTable extends Migration
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
            'statusname' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'status_active' => [
                'type' => 'INT',
                'null' => true,
                'comment' => '0 = inactive, 1 = active',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('jobstatus');
    }

    public function down()
    {
        $this->forge->dropTable('jobstatus');
    }
}
