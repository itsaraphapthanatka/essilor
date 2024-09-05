<?php namespace App\Models;

use CodeIgniter\Model;

class JobtaskModel extends Model {
    protected $table = 'jobtask';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'trackingId', 'ecpid', 'ecpcode', 'orderCycleId', 'tagsCategoryId', 'tagsBeta', 
        'tags', 'categoryId', 'capture', 'createdate', 'createuser', 'updatedate', 
        'updateuser', 'deldate', 'deluser','jobStatus'
    ];

    public function getJobtask() {
        $db = db_connect();
        $db->query("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $builder = $db->table('jobtask jt');
        $builder->select('
            jt.id,
            jt.ecpcode AS ecpcode,
            e.customer_name,
            jt.trackingId AS trackingId,
            GROUP_CONCAT(
                DISTINCT CONCAT(
                    "<span class=\\"badge fs-6 mb-3\\" style=\'color: ", tb.text_color,
                    "; background-color: ", tb.background_color, ";\'>",
                    tb.tag_name, "</span>"
                ) SEPARATOR " "
            ) AS tagsBeta,
            GROUP_CONCAT(
                DISTINCT CONCAT(
                    "<span class=\\"badge fs-6 mb-3\\" style=\'color: ", tj.text_color,
                    "; background-color: ", tj.background_color, ";\'>",
                    tj.tag_name, "</span>"
                ) SEPARATOR " "
            ) AS tagsJob,
            ct.categoriesName,
            DATE_FORMAT(jt.createdate, "%b %d, %Y %H:%i") AS createdate,
            js.statusname,
            e.morning_only,
            e.evening_only,
            e.working_day_only
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        
        $builder->groupBy([
            'jt.id',
        ]);
        $builder->orderBy('jt.createdate', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();
        $count = $query->getNumRows();

        return [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $result
        ];
    }

    public function getTotalCounts($tagid) {
        $db = db_connect();

        $subquery = $db->table('tags t')
            ->select('
                COUNT(j.tagsCategoryId) + 
                COUNT(DISTINCT tbeta.jobid) + 
                COUNT(DISTINCT tjob.jobid) AS totalUsage
            ')
            ->join('jobtask j', 't.id = j.tagsCategoryId', 'left')
            ->join('tagsbeta tbeta', 't.id = tbeta.tagsid', 'left')
            ->join('tagsjob tjob', 't.id = tjob.tagsid', 'left')
            ->where('t.id', $tagid)
            ->groupBy('t.tag_name')
            ->getCompiledSelect();

        // Main query to sum totalUsage
        $builder = $db->table("($subquery) as subquery");
        $builder->select('SUM(subquery.totalUsage) AS totalUsage');

        $query = $builder->get();
        return $query->getRow();
    }
   

    
}
