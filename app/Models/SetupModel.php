<?php namespace App\Models;

use CodeIgniter\Model;

class SetupModel extends Model{
    protected $table = 'config';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','setup','value'];
}