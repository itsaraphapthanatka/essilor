<?php namespace App\Models;

use CodeIgniter\Model;

class CategorizeModel extends Model{
    protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','categoriesName','categoriesStatus','createuser','createdate','updateuser','updatedate','deluser','deldate'];
}