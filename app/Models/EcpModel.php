<?php namespace App\Models;

use CodeIgniter\Model;

class EcpModel extends Model{
    protected $table = 'ecp';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','customer_cd','customer_name','payment_term_cd','customer_alert_1','customer_alert_2','customer_alert_3','promo_code','bu','promo_type','promo_name','promo_start_date','promo_end_date','promo_details','customer_type','region','routecode','routename','show_price','leave_bill','store_comment','logis_remark','morning_only','evening_only','working_day_only','logis_note','logis_note2','logis_delivery','logis_comment','c_customer_parent_group','c_experts','c_partner','nikon_lenswear_partner','upgrade_coating','upgrade_azio','upgrade_f360','logis_cycle'];

	public function insertValue($data){
		$builder = $this->db->table('ecp');
		return $builder->upsert($data,'customer_cd');
	}

	public function trancateData(){

		$this->db->query('SET FOREIGN_KEY_CHECKS = 0'); // Disable foreign key checks

		$builder = $this->db->table('ecp');
		$builder->truncate();

		return $this->db->query('SET FOREIGN_KEY_CHECKS = 1'); // Re-enable foreign key checks
	}

}