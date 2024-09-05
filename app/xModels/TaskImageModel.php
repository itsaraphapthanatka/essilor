<?php namespace App\Models;

use CodeIgniter\Model;

class TaskImageModel extends Model{
    protected $table = 'ass_img';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','ass_code','ass_imgg','ass_num','compcode','createdate'];

    public function UpdateJobTaskImage($code,$data){
        return $this->db
                    ->table('ass_img')
                    ->where(["ass_num" => $code])
                    ->set($data)
                    ->update();
    }
}

