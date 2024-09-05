<?php namespace App\Models;

use CodeIgniter\Model;

class TagsCategoryModel extends Model{
    protected $table = 'tagscategory';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','category_name','CreatedDate','CreatedBy','UpdatedDate','UpdatedBy','DeletedDate','category_status'];

	public function getTagCategoryUsage($categoryId){
        $db = db_connect();
        $builder = $db->table('tagscategory tc');
        $builder->select('tc.category_name, COUNT(DISTINCT t.id) AS totalUsage');
        $builder->join('tags t', 'tc.id = t.tag_category', 'left');
        $builder->where('tc.id', $categoryId); // Adding the WHERE clause
        $builder->groupBy('tc.category_name');
        $builder->orderBy('totalUsage', 'DESC');

        $query = $builder->get();
        return $query->getRow();
    }
}