<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAssImgTable extends Migration
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
            'ass_code' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
                'collation' => 'utf8mb3_general_ci',
            ],
            'ass_imgg' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'collation' => 'utf8mb3_general_ci',
            ],
            'ass_num' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
                'collation' => 'utf8mb3_general_ci',
            ],
            'compcode' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'collation' => 'utf8mb3_general_ci',
            ],
            'createdate' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('ass_img');
    }

    public function down()
    {
        $this->forge->dropTable('ass_img');
    }
}
