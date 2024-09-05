<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTagscategoryTable extends Migration
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
            'category_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'CreatedDate' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'CreatedBy' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'UpdatedDate' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'on_update' => 'CURRENT_TIMESTAMP',
            ],
            'UpdatedBy' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'DeletedDate' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'category_status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'null' => false,
                'default' => 'active',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tagscategory');
    }

    public function down()
    {
        $this->forge->dropTable('tagscategory');
    }
}
