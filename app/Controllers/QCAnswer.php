<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobtaskModel;
use App\Models\commentTypeModel;

class QCAnswer extends BaseController{
    public function __construct(){
        $db = db_connect();
    }
    public function myjobqc(){
        echo view('pages/menu/header');
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/feedback/myjob/callqcjob');
        echo view('pages/menu/footer');
    }
    public function myCalljobqc(){
        $task = new JobtaskModel();
        $commentType = new commentTypeModel();
        $data['commentType'] = $commentType->where(['commentType' => 'qc'])->orderBy('id','ASC')->findAll();
       $task->updateCallQC();

        $data['res'] = $task->getJobtaskMyQC();
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/feedback/myjob/myCalljobQC');
        echo view('pages/menu/footer');
    }
    public function saveqc(){
        $task = new JobtaskModel();
        $id = $this->request->getPost('id');
        $data = [
            'QCStatus' => 4,
            'callQC' => 'Y',
            'callQCuser' => session()->get('m_name'),
            'updateqcdate' => date('Y-m-d H:i:s'),
            'updatedate' => date('Y-m-d H:i:s'),
            'updateuser' => session()->get('m_name'),
        ];
        $res = $task->update($id,$data);
        if($res){
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'updated Status successfully',
                'id' => $id
            ]);
        }else{
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to update record',
                'id' => $id
            ]);
        }
    }
    public function SaveRejectQC(){
        $add = $this->request->getPost();
        $task = new JobtaskModel();
        $data = [
            'QCStatus' => '5',
            'callQCuser' => session()->get('m_name'),
            'commentQC' => $add['commentQC'],
            'commentNote' =>  $add['note'],
            'updateqcdate' => date('Y-m-d H:i:s')
        ];
        $res = $task->update($add['taskID'],$data);
        if ($res) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'updated Status successfully',
                'id' => $add['taskID']
            ]);
        }else{
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to update record',
                'id' => $add['taskID']
            ]);
        }
    }
}