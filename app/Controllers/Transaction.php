<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobtaskModel;

class Transaction extends BaseController{
    public function __construct(){
        $db = db_connect();
    }
    public function getJobtask($sag1 = false){
        $task = new JobtaskModel();
		$query = $task->getJobtask($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskscroll($sag1 = false){
        $task = new JobtaskModel();
		$query = $task->getJobtaskscroll($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskQCProcess($sag1 = false){
        $task = new JobtaskModel();
		$query = $task->getJobtaskQCProcess($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskListVIP(){
        $task = new JobtaskModel();
		$query = $task->getJobtaskListVIP();
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskListFiFo($sag1 = false){

        $task = new JobtaskModel();
		$query = $task->getJobtaskListFiFo($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskCalljob($sag1 = false){
        $task = new JobtaskModel();
		$query = $task->getJobtaskCalljob($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskUpdateCalljob($sag1 = false){
        $task = new JobtaskModel();
		$query = $task->getJobtaskUpdateCalljob($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getJobtaskStockTags($sag1 = false){
        $task = new JobtaskModel();
		$query = $task->getJobtaskStockTags($sag1);
        $arr = [
            "recordsTotal" => $query['recordsTotal'],
            "recordsFiltered" => $query['recordsFiltered'],
            "data" => $query['data']

        ];
        return $this->response->setJSON($arr);
    }


}