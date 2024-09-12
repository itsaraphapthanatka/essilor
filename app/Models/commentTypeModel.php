<?php namespace App\Models;

use CodeIgniter\Model;

class commentTypeModel extends Model{
    protected $table = 'comment_type';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','commentName','commentType','commentStatus','createuser','createdate','updateUser','updatedate','delUser','deldate'];

	public function getCommentCounts()
    {
        // Get the database connection
        $db = db_connect();

        // Build the query
        $builder = $db->table('comment_type ct')
                      ->select('ct.id,ct.commentName, COUNT(j.comment) as comment_count')
                      ->join('jobtask j', 'ct.id = j.comment', 'left')
					  ->where(['ct.commentType' => 'keyin'])
                      ->groupBy('ct.id');
        
        // Execute and return the result
        return $builder->get()->getResult();
    }
}