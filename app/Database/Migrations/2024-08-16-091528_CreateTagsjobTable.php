<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTagsjobTable extends Migration
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
        
        $this->forge->addForeignKey('jobid', 'jobtask', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tagsid', 'tags', 'id', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('tagsjob');
    }

    public function down()
    {
        $this->forge->dropTable('tagsjob');
    }
}
