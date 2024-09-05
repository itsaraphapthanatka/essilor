<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTagsbetaTable extends Migration
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
            'jobid' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'tagsid' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('jobid');
        $this->forge->addKey('tagsid');
        
        $this->forge->addForeignKey('tagsid', 'tags', 'id', 'CASCADE', 'CASCADE');
        // Assuming there is a foreign key for jobid in another table
        // $this->forge->addForeignKey('jobid', 'jobtask', 'id', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('tagsbeta');
    }

    public function down()
    {
        $this->forge->dropTable('tagsbeta');
    }
}
