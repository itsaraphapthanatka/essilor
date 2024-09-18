<?php namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model{
    protected $table = 'contactType';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','contactName','commentType','status','createUser','createDate','updateUser','updateDate','deleteUser','deleteDate'];
}