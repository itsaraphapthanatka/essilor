<?php namespace App\Models;

use CodeIgniter\Model;

class UserOnlineModel extends Model{
    protected $table = 'user_online';
	protected $primaryKey = 'uid';
	protected $allowedFields = ['id','uid','status','last_login','ip_address','latitude','longtitude','compcode'];

	public function getUsersOnline(){
		$db = db_connect();
		$query = $db->query("
		SELECT
			a.id,
			a.uid,
			a.`status`,
			a.last_login,
			a.ip_address,
			b.user_name as fullname,
			b.user_img as user_img
		FROM
			user_online a
			INNER JOIN
			users b
			ON
				a.uid = b.id
		order by
			b.id ASC
		");
		$query = $query->getResult();

		$builder = $db->table('user_online');
		$builder->select('*');
		$builder->join('users', 'usersid = user_online.uid');
		$count = $builder->countAllResults();

		return $arr = [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $query

        ];
	}
}