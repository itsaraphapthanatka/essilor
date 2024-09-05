<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','user_name','user_email','user_password','user_created_at','user_img','user_role','user_branch','user_position','compcode','mobile','user_status','prekey','line_auth'];
    // protected $useTimestamps = true;

    public function chkLogin($username){
        return $this->asArray()
                    ->where(['user_name'=> $username,'user_status'=>'active'])
                    ->first();
    }

    public function getUsers(){
        return $this->orderBy('id', 'DESC')->findAll();
    }

    public function update_profile($id,$data){
        return $this->db
                    ->table('users')
                    ->where(["id" => $id])
                    ->set($data)
                    ->update();
    }
}

