<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobtaskModel;

class Transaction extends BaseController{
    public function __construct(){
        $db = db_connect();
    }
    public function getJobtask(){
        $task = new JobtaskModel();
		$query = $task->getJobtask();
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }

}