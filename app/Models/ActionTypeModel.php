<?php namespace App\Models;

use CodeIgniter\Model;

class ActionTypeModel extends Model{
    protected $table = 'actionType';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','actionName','commentType','status','createUser','createDate','updateUser','updateDate','deleteUser','deleteDate'];
}