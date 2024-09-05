<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEcpTable extends Migration
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
            'customer_cd' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'customer_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'payment_term_cd' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'comment' => '1 CREDIT\n2 COD',
            ],
            'customer_alert_1' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'customer_alert_2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'customer_alert_3' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'promo_code' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'bu' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'promo_type' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'promo_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'promo_start_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'promo_end_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'promo_details' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'customer_type' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'comment' => '1 standard\n2 VIP',
            ],
            'region' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'routecode' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'routename' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'show_price' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'leave_bill' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'store_comment' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'logis_remark' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'logis_cycle' => [
                'type' => 'INT',
                'null' => true,
                'comment' => 'รอบจัดส่ง',
            ],
            'morning_only' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
                'default' => 'no',
                'collation' => 'utf8mb3_general_ci',
                'comment' => 'yes or no',
            ],
            'evening_only' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
                'default' => 'no',
                'collation' => 'utf8mb3_general_ci',
                'comment' => 'yes or no',
            ],
            'working_day_only' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
                'default' => 'no',
                'collation' => 'utf8mb3_general_ci',
                'comment' => 'yes or no',
            ],
            'logis_note' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'logis_note2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'logis_delivery' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'logis_comment' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'c_customer_parent_group' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'c_experts' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'c_partner' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nikon_lenswear_partner' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'upgrade_coating' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'upgrade_azio' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'upgrade_f360' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('customer_cd');
        $this->forge->addKey('logis_cycle');

        $this->forge->addForeignKey('logis_cycle', 'ordercycle', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('ecp');
    }

    public function down()
    {
        $this->forge->dropTable('ecp');
    }
}
