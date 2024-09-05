<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJobTaskTable extends Migration
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
            'trackingId' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'ecpid' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'ecpcode' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'orderCycleId' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'tagsCategoryId' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'tagsBeta' => [
                'type' => 'TEXT',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'tags' => [
                'type' => 'TEXT',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'categoryId' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'capture' => [
                'type' => 'LONGTEXT',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'jobStatus' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'createdate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'createuser' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'updatedate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updateuser' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'deldate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deluser' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('orderCycleId');
        $this->forge->addKey('categoryId');
        $this->forge->addKey('jobStatus');
        $this->forge->addKey('tagsCategoryId');
        $this->forge->addKey('ecpid');

        $this->forge->addForeignKey('orderCycleId', 'ordercycle', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('ecpid', 'ecp', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('jobStatus', 'jobstatus', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tagsCategoryId', 'tagscategory', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('jobtask');
    }

    public function down()
    {
        $this->forge->dropTable('jobtask');
    }
}
