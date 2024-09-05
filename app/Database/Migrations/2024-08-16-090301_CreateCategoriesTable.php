<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTable extends Migration
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
            'categoriesName' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'categoriesStatus' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'createuser' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'createdate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updateuser' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'updatedate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deluser' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'collation' => 'utf8mb4_general_ci',
            ],
            'deldate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
