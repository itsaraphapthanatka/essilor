<?php namespace App\Models;

use CodeIgniter\Model;

class TagsModel extends Model{
    protected $table = 'tags';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','tag_name','tag_meaning','tag_category','text_color','background_color','CreatedDate','CreatedBy','UpdatedDate','UpdatedBy','DeletedDate','duedate','tag_status'];
    
    public function getTags(){
        $db = db_connect();
        
        $builder = $db->table('tags');
        $totalResults = $builder
        ->join('tagscategory', 'tags.tag_category = tagscategory.id')
        ->countAllResults(false); // false means it will not reset the query
        
        $builder = $db->table('tags');
        $builder->select('tags.*, tagscategory.category_name');
        $builder->join('tagscategory', 'tags.tag_category = tagscategory.id','left');
        $builder->orderBy('tags.id', 'ASC');
        $query = $builder->get();
        $data = $query->getResult();
        return ['data' => $data, 'totalResults' => $totalResults];
    }

    public function update_tags($id,$data){
        return $this->db
                    ->table('tag')
                    ->where(["id" => $id])
                    ->set($data)
                    ->update();
    }
}