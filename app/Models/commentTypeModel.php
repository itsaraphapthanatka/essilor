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
		
        // สร้างคิวรี่สำหรับงานที่มีสถานะเท่��กับ 12
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
    public function countJobtasksByStatusMonth()
	{
		// เชื่อมต่อกับฐานข้อมูล
		$db = db_connect();

		// สร้างคิวรี่สำหรับงานที่มีสถานะไม่เท่ากับ 11
		$builderPending = $db->table('jobtask')
					  ->select('COUNT(*) as count')
					  ->where('jobStatus !=', 11)
					  ->where('jobStatus !=', 12)
					  ->where('DATE_FORMAT(updatedate, "%Y-%m")', date('Y-m'))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่รอดำเนินการ
		$resultPending = $builderPending->get()->getRow();

		// สร้างคิวรี่สำหรับงานที่มีสถานะเท่ากับ 11
		$builderInProgress = $db->table('jobtask')
					  ->select('COUNT(*) as count')
					  ->where('jobStatus', 11)
                      ->where('DATE_FORMAT(updatedate, "%Y-%m")', date('Y-m'))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่กำลังดำเนินการ
		$resultInProgress = $builderInProgress->get()->getRow();
		
        // สร้างคิวรี่สำหรับงานที่มีสถานะเท่ากับ 12
		$builderComplete = $db->table('jobtask')
					  ->select('COUNT(*) as count')
					  ->where('jobStatus', 12)

                      ->where('DATE_FORMAT(updatedate, "%Y-%m")', date('Y-m'))
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
    public function countPendingSupport()
	{
		// เชื่อมต่อกับฐานข้อมูล
		$db = db_connect();

		// สร้างคิวรี่สำหรับงานที่มีสถานะไม่เท่ากับ 11
		$oneDay = $db->table('jobtask')
					  ->selectCount('id', 'count') // ใช้ selectCount แทน select('COUNT(*) as count')
                      ->whereIn('jobStatus', ['11','12'])
					  ->where('DATE_FORMAT(updatedate, "%Y-%m-%d")', date('Y-m-d', strtotime('-1 day')))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่รอดำเนินการ
		$resultOne = $oneDay->get()->getRow();

		// สร้างคิวรี่สำหรับงานที่มีสถานะไม่เท่ากับ 11
		$twoDay = $db->table('jobtask')
                      ->selectCount('id', 'count') // ใช้ selectCount แทน select('COUNT(*) as count')
                      ->whereIn('jobStatus', ['11','12'])
					  ->where('DATE_FORMAT(updatedate, "%Y-%m-%d")', date('Y-m-d', strtotime('-2 day')))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่รอดำเนินการ
		$resultTwo = $twoDay->get()->getRow();

		// สร้างคิวรี่สำหรับงานที่มีสถานะไม่เท่ากับ 11
		$treeDay = $db->table('jobtask')
                      ->selectCount('id', 'count') // ใช้ selectCount แทน select('COUNT(*) as count')
                      ->whereIn('jobStatus', ['11','12'])
					  ->where('DATE_FORMAT(updatedate, "%Y-%m-%d")', date('Y-m-d', strtotime('-3 day')))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่รอดำเนินการ
		$resulttree = $treeDay->get()->getRow();

// สร้างคิวรี่สำหรับงานที่มีสถานะไม่เท่ากับ 11
		$treeplusDay = $db->table('jobtask')
                      ->selectCount('id', 'count') // ใช้ selectCount แทน select('COUNT(*) as count')
                      ->whereIn('jobStatus', ['11','12'])
					  ->where('DATE_FORMAT(updatedate, "%Y-%m-%d") <=', date('Y-m-d', strtotime('-3 day')))
					  ->where('comment IS NOT NULL');

		// ดำเนินการคิวรี่และส่งคืนผลลัพธ์สำหรับงานที่รอดำเนินการ
		$resulttreeplus = $treeplusDay->get()->getRow();
		

		return [
            'One' => $resultOne->count,
			'Two' => $resultTwo->count,
			'Tree' => $resulttree->count,
			'TreePlus' => $resulttreeplus->count
		];

	}





    public function getCommentCountsPending($id = false,$month = false,$year = false ){
        $db = db_connect();
        $builder = $db->query("
        SELECT 
            combined.id, 
            combined.commentName, 
            SUM(combined.comment_count) AS comment_count
        FROM 
            (
                SELECT 
                    ct.id, 
                    ct.commentName, 
                    SUM(CASE WHEN j1.QCStatus IN ('4','5','6','7','8') AND j1.commentQC IS NOT NULL THEN 1 ELSE 0 END) AS comment_count
                FROM 
                    comment_type ct
                LEFT JOIN
                    jobtask j1 ON ct.id = j1.commentQC
                WHERE 
                    ct.commentType IN ('keyin', 'support', 'urgent', 'qc')
                GROUP BY 
                    ct.id
                UNION ALL
                SELECT 
                    ct.id, 
                    ct.commentName, 
                    SUM(CASE WHEN j.jobStatus NOT IN (11, 12) OR j.qcStatus != 7 THEN 1 ELSE 0 END) AS comment_count
                FROM 
                    comment_type ct
                LEFT JOIN 
                    jobtask j ON ct.id = j.comment
                WHERE 
                    ct.commentType IN ('keyin', 'support', 'urgent')
                    AND j.updatedate LIKE '$year-$month%'
                GROUP BY 
                    ct.id
            ) AS combined
        GROUP BY 
            combined.id, 
            combined.commentName;
    ");
        return $builder->getResult();
    }
    public function getCommentCountsInprogress($id = false,$month = false,$year = false ){
        $db = db_connect();
        $builder = $db->query("
            SELECT 
                combined.id, 
                combined.commentName, 
                SUM(combined.comment_count) AS comment_count
            FROM 
                (
                    SELECT 
                        ct.id, 
                        ct.commentName, 
                        SUM(CASE WHEN j1.QCStatus in (7) THEN 1 ELSE 0 END) AS comment_count
                    FROM 
                        comment_type ct
                    LEFT JOIN
                        jobtask j1 ON ct.id = j1.commentQC
                    WHERE 
                        ct.commentType IN ('keyin', 'support', 'urgent', 'qc')
                    GROUP BY 
                        ct.id
                    UNION ALL
                    SELECT 
                        ct.id, 
                        ct.commentName, 
                        SUM(CASE WHEN j.jobStatus in (11) OR j.qcStatus in(7) THEN 1 ELSE 0 END) AS comment_count
                    FROM 
                        comment_type ct
                    LEFT JOIN 
                        jobtask j ON ct.id = j.comment
                    WHERE 
                        ct.commentType IN ('keyin', 'support', 'urgent')
                        AND j.updatedate LIKE '$year-$month%'
                    GROUP BY 
                        ct.id
                ) AS combined
            GROUP BY 
                combined.id, 
                combined.commentName;
        ");
        return $builder->getResult();
    }
}
