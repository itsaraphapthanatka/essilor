<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTagsTable extends Migration
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
            'tag_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'tag_meaning' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tag_category' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'text_color' => [
                'type' => 'VARCHAR',
                'constraint' => '7',
                'null' => false,
            ],
            'background_color' => [
                'type' => 'VARCHAR',
                'constraint' => '7',
                'null' => false,
            ],
            'CreatedDate' => [
                'type' => 'DATETIME',
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'CreatedBy' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'UpdatedDate' => [
                'type' => 'DATETIME',
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'UpdatedBy' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'DeletedDate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'duedate' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'tag_status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tags');
    }

    public function down()
    {
        $this->forge->dropTable('tags');
    }
}
