<?php namespace App\Models;

use CodeIgniter\Model;

class JobtaskModel extends Model {
    protected $table = 'jobtask';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'trackingId', 'ecpid', 'ecpcode', 'orderCycleId', 'tagsCategoryId', 'tagsBeta', 
        'tags', 'categoryId', 'capture', 'createdate', 'createuser', 'updatedate',
        'updateuser', 'deldate', 'deluser','jobStatus','calljob','calluser', 'comment','QCStatus','callQC','callQCuser','commentQC','commentNote','updateqcdate'
    ];

    public function getJobtask($sag1) {
        $db = db_connect();

        // Call the stored procedure
        $query = $db->query("CALL getJobtask(?)", [$sag1]);

        // Fetch the results
        $result = $query->getResult();
        $count = $query->getNumRows();

        return [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $result
        ];
    }
    public function getJobtask_bk($sag1) {
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
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.capture,
            jt.jobStatus,
            jt.qcstatus,
            jt.createuser,
            oc.cyclename,
            jt.orderCycleId as ocid
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('ordercycle oc', 'jt.orderCycleId = oc.id', 'left');
        if($sag1 == 2){
            $builder->where(['e.customer_type' => 'VIP']);
            $builder->where('jt.calljob', NULL, false);
        }
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

    public function getJobTasksScroll()
    {
        $db = db_connect();

        // Get DataTables parameters
        $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
        $length = isset($_POST['length']) ? intval($_POST['length']) : 10;
        $orderColumnIndex = isset($_POST['order'][0]['column']) ? intval($_POST['order'][0]['column']) : 0;
        $orderDirection = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'asc';

        // Map DataTables column index to database column name
        $columnMapping = [
            0 => 'jt.id',
            1 => 'jt.ecpcode',
            // Add other mappings here
        ];
        $orderColumn = $columnMapping[$orderColumnIndex] ?? 'jt.id';

        // Call the stored procedure
        $query = $db->query("CALL getJobTasksScroll(?, ?, ?, ?)", [
            $start,
            $length,
            $orderColumn,
            $orderDirection
        ]);

        // Fetch the result
        $resultArray = $query->getResultArray();

        // Count total records
        $countQuery = $db->query("SELECT FOUND_ROWS() as totalRecords;");
        $totalRecords = $countQuery->getRow()->totalRecords;

        // Prepare the DataTables response
        $responseData = [
            "draw" => isset($_POST['draw']) ? intval($_POST['draw']) : 1,
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecords,
            "data" => $resultArray
        ];

        // Return JSON response
        return $this->response->setJSON($responseData);
    }
    public function getJobtaskByID($sag1) {
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
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.jobStatus
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->where(['jt.id' => $sag1]);
        $builder->groupBy([
            'jt.id',
        ]);
        $builder->orderBy('jt.createdate', 'ASC');

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;

    }
    public function getJobtaskListVIP() {
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
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.jobStatus,
            oc.cyclename,
            jt.orderCycleId as ocid
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('ordercycle oc', 'jt.orderCycleId = oc.id', 'left');
        // $builder->where(['e.customer_type' => 'VIP']);
        $builder->where('jt.trackingId', NULL, false);
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
    public function getJobtaskListFifo($sag1 = false) {// sag1 0 = task , 1 = myjob 
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
            GROUP_CONCAT(
                DISTINCT CONCAT( 
                    aimg.ass_imgg
                )
            ) AS image,
            ct.categoriesName,
            DATE_FORMAT(jt.createdate, "%b %d, %Y %H:%i") AS createdate,
            js.statusname,
            e.morning_only,
            e.evening_only,
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.capture,
            categoriesName,
            e.customer_alert_1,
            jt.jobStatus,
            oc.cyclename,
            jt.orderCycleId as ocid
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('ass_img aimg', 'jt.id = aimg.ass_code','left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('tagscategory tc', 'jt.tagsCategoryId = tc.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('ordercycle oc', 'jt.orderCycleId = oc.id', 'left');
        // $builder->where(['e.customer_type !=' => 'VIP']);
        if ($sag1 == 1) {
            $builder->where(['jt.calljob' => 'Y']);
            $builder->where(['jt.jobstatus' => 2]);
            $builder->where(['jt.calluser' => session()->get('userid')]);
        }
        $builder->groupBy([
            'jt.id',
        ]);
        if ($sag1 == 1) {
            $builder->limit(3);
        }
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
    public function getJobtaskCalljob($sag1) {
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
            GROUP_CONCAT(
                DISTINCT CONCAT( 
                    aimg.ass_imgg
                )
            ) AS image,
            ct.categoriesName,
            DATE_FORMAT(jt.createdate, "%b %d, %Y %H:%i") AS createdate,
            js.statusname,
            e.morning_only,
            e.evening_only,
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.capture,
            categoriesName,
            e.customer_alert_1,
            jt.jobStatus,
            oc.cyclename,
            jt.orderCycleId as ocid
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('ass_img aimg', 'jt.id = aimg.ass_code','left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('tagscategory tc', 'jt.tagsCategoryId = tc.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('ordercycle oc', 'jt.orderCycleId = oc.id', 'left');
        if($sag1 == 2){
            $builder->where(['e.customer_type' => 'VIP']);
            $builder->where(['jt.calljob' => 'Y']);
            $builder->where(['jt.jobstatus' => 2]);
            $builder->where(['jt.calluser' => session()->get('userid')]);
        }
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
    public function getJobtaskStockTags($sag1) {
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
            GROUP_CONCAT(
                DISTINCT CONCAT( 
                    aimg.ass_imgg
                )
            ) AS image,
            ct.categoriesName,
            DATE_FORMAT(jt.createdate, "%b %d, %Y %H:%i") AS createdate,
             js.statusname,
            e.morning_only,
            e.evening_only,
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.capture,
            categoriesName,
            e.customer_alert_1,
            jt.jobStatus,
            oc.cyclename,
            jt.orderCycleId as ocid
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('ass_img aimg', 'jt.id = aimg.ass_code','left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('tagscategory tc', 'jt.tagsCategoryId = tc.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('ordercycle oc', 'jt.orderCycleId = oc.id', 'left');
        if($sag1 == 1){
            $builder->where(['jt.jobStatus' => 1]);
        }
        if($sag1 == 2){
            $builder->where(['jt.jobStatus' => 2]);
            $builder->where(['jt.calljob' => 'Y']);
            $builder->where(['jt.calluser' => session()->get('userid')]);
        }
        
        $builder->where(['tc.isStock' => 'Y']);
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
    public function getJobtaskUpdateCalljob($sag1) { // 1: fifo , 2: VIP , 3 Stock
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
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            tc.isStock,
            jt.jobStatus
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('tagscategory tc', 'jt.tagsCategoryId = tc.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        if($sag1 == 2){
            $builder->where(['e.customer_type' => 'VIP']);
        }elseif($sag1 == 3){
            $builder->where(['tc.isStock' => 'Y']);
        }
        $builder->where(['jt.jobstatus' => 1]);
        $builder->groupBy([
            'jt.id',
        ]);
        $builder->orderBy('jt.createdate', 'ASC');
        $builder->limit(3);

        $query = $builder->get();
        $result = $query->getResult();
        $count = $query->getNumRows();
        $updData = [
            'jobStatus' => 2,
            'calljob' => 'Y',
            'calluser' => session()->get('userid')
        ];

        foreach ($result as $key => $value) {
            $this->update($value->id,$updData);
        }

        return [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $result
        ];
    }
    public function getJobtaskQCProcess($sag1) { // 1: wait , 2: process
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
            DATE_FORMAT(jt.createdate, "%d/%m/%Y") AS createdate,
            js.statusname,
            e.morning_only,
            e.evening_only,
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.capture,
            jt.jobStatus,
            jt.QCStatus as qcstatus,
            jss.statusname as qcstatusname,
            jt.createuser,
            DATE_FORMAT(jt.updatedate, "%d/%m/%Y") AS updatedate,
            cm.commentName as commentQCName,
            jt.commentNote,
            us.user_name as keyinUser
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('jobstatus jss', 'jt.QCStatus = jss.id', 'left');
        $builder->join('comment_type cm', 'jt.commentQC = cm.id', 'left');
        $builder->join('users us', 'jt.calluser = us.id', 'left');
        if($sag1 == 1){
            $builder->where('jt.QCStatus', NULL, TRUE);
            $builder->where('jt.trackingId is not NULL');
            $builder->where(['jt.jobStatus' => 3]);
            // $builder->where(['jt.calluser' => session()->get('userid')]);
        }
        if($sag1 == 2){
            $builder->where('jt.QCStatus is not NULL');
        }
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
    public function CountJobtask() {
        $db = db_connect();
        $today = date('Y-m-d');

        // Count tasks that are waiting for QC (QCStatus is NULL, trackingId is not NULL, jobStatus = 3, and calljob = 'Y')
        $builder = $db->table('jobtask jt');
        $builder->select('id');
        $builder->where('jt.QCStatus', NULL, TRUE);
        $builder->where('jt.trackingId IS NOT NULL', NULL, FALSE);
        $builder->where('jt.jobStatus', 3);
        $builder->where('jt.calljob', 'Y');
        $builder->where('DATE(jt.updatedate)', $today);
        $countwait = $builder->countAllResults();

        // Count tasks that have passed QC (QCStatus is not NULL)
        $builder = $db->table('jobtask jt');
        $builder->select('id');
        $builder->where('jt.trackingId IS NOT NULL', NULL, FALSE);
        $builder->where('jt.QCStatus',4);
        $builder->where('DATE(jt.`updateqcdate`)', $today);
        $countpass = $builder->countAllResults();

         // Count tasks that have Not passed QC (QCStatus reject )
        $builder = $db->table('jobtask jt');
        $builder->select('id');
        $builder->where('jt.trackingId IS NOT NULL', NULL, FALSE);
        $builder->where('jt.jobStatus', 3);
        $builder->where('jt.QCStatus', 5);
        $builder->where('jt.calljob', 'Y');
        $builder->where('jt.callQC','Y');
        $builder->where('DATE(jt.`updateqcdate`)', $today);
        $countreject = $builder->countAllResults();

        return [
            "countwait" => $countwait,
            "countpass" => $countpass,
            "countreject" => $countreject
        ];
    }

    public function getJobtaskMyQC() { // 1: wait , 2: process
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
            GROUP_CONCAT(
                DISTINCT CONCAT( 
                    aimg.ass_imgg
                )
            ) AS image,
            ct.categoriesName,
            DATE_FORMAT(jt.createdate, "%d/%m/%Y") AS createdate,
            js.statusname,
            e.morning_only,
            e.evening_only,
            e.working_day_only,
            e.customer_type,
            jt.calljob,
            jt.capture,
            jt.jobStatus,
            jt.QCStatus as qcstatus,
            jss.statusname as qcstatusname,
            jt.createuser,
            DATE_FORMAT(jt.updatedate, "%d/%m/%Y") AS updatedate,
        ');

        $builder->join('ecp e', 'jt.ecpid = e.id');
        $builder->join('tagsbeta tbeta', 'jt.id = tbeta.jobid', 'left');
        $builder->join('tagsjob tjob', 'jt.id = tjob.jobid', 'left');
        $builder->join('ass_img aimg', 'jt.id = aimg.ass_code','left');
        $builder->join('tags tb', 'tbeta.tagsid = tb.id', 'left');
        $builder->join('tags tj', 'tjob.tagsid = tj.id', 'left');
        $builder->join('tagscategory tc', 'jt.tagsCategoryId = tc.id', 'left');
        $builder->join('categories ct', 'jt.categoryId = ct.id', 'left');
        $builder->join('jobstatus js', 'jt.jobStatus = js.id', 'left');
        $builder->join('jobstatus jss', 'jt.QCStatus = jss.id', 'left');
        
        $builder->where(['jt.jobStatus' => 3]);
        $builder->where(['jt.calljob' => 'Y']);
        $builder->where(['jt.callQC' => 'Y']);
        $builder->where(['jt.calluser' => session()->get('userid')]);
        $builder->where('jt.QCStatus is NULL', null, false);
  
        $builder->groupBy([
            'jt.id',
        ]);
        $builder->limit(3);
        $builder->orderBy('jt.createdate', 'ASC');

        $query = $builder->get();
        $result = $query->getResult();
        $count = $query->getNumRows();

        return  $result;
    }
    public function updateCallQC(){
        $db = db_connect();
         $builder = $db->table('jobtask jt');
        $builder->select('*');
        $builder->where(['jt.jobStatus' => 3]);
        $builder->where(['jt.calljob' => 'Y']);
        $builder->where('jt.QCStatus is NULL', null, false);
        $builder->limit(3);
        $builder->orderBy('jt.createdate', 'ASC');
        $query = $builder->get();
        $result = $query->getResult();
        $ids = array_column($result, 'id');
        if (!empty($ids)) {
            $data = [
                'callQC' => 'Y',
            ];
            $this->whereIn('id', $ids)
            ->set($data)
            ->update();
        }
    }
}
