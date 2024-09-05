<?php namespace App\Models;

use CodeIgniter\Model;

class OrderCycleModel extends Model{
    protected $table = 'ordercycle';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','cyclename','cycle_status','createuser','createdate','updateuser','updatedate','deluser','userdate'];

}