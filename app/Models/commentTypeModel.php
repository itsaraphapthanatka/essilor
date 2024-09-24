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
                      ->select('ct.id,ct.commentName, SUM(CASE WHEN j.jobStatus != 11 AND j.jobStatus != 12 THEN 1 ELSE 0 END) AS comment_count', false)
                      ->join('jobtask j', 'ct.id = j.comment', 'left')
					  ->whereIn('ct.commentType', ['keyin','support','urgent'])
                      ->groupBy('ct.id');
        
        // Execute and return the result
        return $builder->get()->getResult();
    }
	public function countJobtasksByStatus()
	{
		// เชื่อมต่อกับฐานข้อมูล
		$db = db_connect();

		// สร้างคิวรี่สำหรับงานที่มีสถานะไม่เท่ากับ 11
		$builderPending = $db->table('jobtask')
					  ->select('COUNT(*) as count')
					  ->where('jobStatus !=', 11)
					  ->where('jobStatus !=', 12)
					  ->where('DATE(updatedate)', date('Y-m-d'))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่รอดำเนินการ
		$resultPending = $builderPending->get()->getRow();

		// สร้างคิวรี่สำหรับงานที่มีสถานะเท่ากับ 11
		$builderInProgress = $db->table('jobtask')
					  ->select('COUNT(*) as count')
					  ->where('jobStatus', 11)
                      ->where('DATE(updatedate)', date('Y-m-d'))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่กำลังดำเนินการ
		$resultInProgress = $builderInProgress->get()->getRow();
		
        // สร้างคิวรี่สำหรับงานที่มีสถานะเท่ากับ 12
		$builderComplete = $db->table('jobtask')
					  ->select('COUNT(*) as count')
					  ->where('jobStatus', 12)

                      ->where('DATE(updatedate)', date('Y-m-d'))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่กำลังดำเนินการ
		$resultComplete = $builderComplete->get()->getRow();

		// ส่งคืนผลลัพธ์ทั้งสองในรูปแบบของ array

		return [
            'complete' => $resultComplete->count,
			'pending' => $resultPending->count,
			'inProgress' => $resultInProgress->count
		];

	}
	public function getCommentCountsInprogress()
    {
        // Get the database connection
        $db = db_connect();
        // สร้างคิวรี่สำหรับนับจำนวนงานที่มีสถานะ 11 แยกตามประเภทความคิดเห็น
        $builder = $db->table('comment_type ct')
            ->select('ct.id, ct.commentName, SUM(CASE WHEN j.jobStatus in (11,12) THEN 1 ELSE 0 END) AS comment_count', false)
            ->join('jobtask j', 'ct.id = j.comment', 'left')
            ->whereIn('ct.commentType', ['keyin', 'support', 'urgent'])
            ->groupBy('ct.id');
        // ดำเนินการคิวรี่และส่งคืนผลลัพธ์
        return $builder->get()->getResult();
    }
    public function getCommentCountsPending($id = false){
        $db = db_connect();
        $builder = $db->table('comment_type ct')
            ->select('ct.id, ct.commentName, SUM(CASE WHEN j.jobStatus != 11 AND j.jobStatus != 12 THEN 1 ELSE 0 END) AS comment_count', false)
            ->join('jobtask j', 'ct.id = j.comment', 'left')
            ->whereIn('ct.commentType', ['keyin', 'support', 'urgent'])
            ->groupBy('ct.id');
        return $builder->get()->getResult();
    }
}