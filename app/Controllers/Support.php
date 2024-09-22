<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobtaskModel;
use App\Models\ActionTypeModel;
use App\Models\commentTypeModel;
use App\Models\ContactModel;
use App\Models\SupportJobModel;


class Support extends BaseController{
    public function __construct()
    {
        $db = db_connect();
    }
    public function loadtable($sag1 = false,$sag2 = false,$sag3 = false,$sag4 = false){
        $data['issueid'] = $sag1;
        $data['status'] = $sag2;
        $data['month'] = $sag3;
        $data['year'] = $sag4;

        echo view('pages/transaction/support/load_jobtask_issue',$data);
    }
    public function loadbadgeCountPending($sag1 = false){
        $commentType = new commentTypeModel();
        $data['commentType'] = $commentType->getCommentCountsPending($sag1);
        echo view('pages/transaction/support/loadIssueMenu',$data);
    }


    public function getJobtaskSupport($sag1 = false,$sag2 = false,$sag3 = false,$sag4 = false){

        $jobtask = new JobtaskModel();
        $data = $jobtask->getJobtaskSupport($sag1,$sag2,$sag3,$sag4);

        return $this->response->setJSON($data);
    }
    public function loadActionType($sag1 = false,$sag2 = false){
        $actionType = new ActionTypeModel();
        $data['ticketID'] = $sag1;
        $data['issueID'] = $sag2;
        $data['action'] = $actionType->where(['commentType' => $sag2])->orderBy('id','asc')->findAll();
        echo view('pages/transaction/support/loadActionType',$data);
    }
    public function loadContactType($sag1 = false,$sag2 = false){
        $contact = new ContactModel();
        $data['ticketID'] = $sag1;
        $data['issueID'] = $sag2;
        $data['contact'] = $contact->orderBy('id','asc')->findAll();
        echo view('pages/transaction/support/loadContactType',$data);
    }
    public function CreateTransactionSupport(){
        $add = $this->request->getPost();
        $actionTypeFlag = $add['actionTypeFlag'];
        // สร้างอินสแตนซ์ของโมเดล SupportJob
        $supportJobModel = new supportJobModel();
        // สร้างรหัสธุรกรรมแบบสุ่ม 8 หลัก
        $transactionCode = sprintf('%08d', mt_rand(0, 99999999));
        
        // เพิ่มรหัสธุรกรรมเข้าไปในข้อมูลที่จะบันทึก
        $add['transactionCode'] = $transactionCode;
        // เตรียมข้อมูลสำหรับการบันทึก
        $data = [
            'transactionCode' => $transactionCode,
            'ticketcode' => $add['ticketid'],
            'trackingNo' => $add['trackingid'],
            'contactType' => $add['contactType'],
            'contactName' => $add['contactName'],
            'actionType' => $add['actionType'],
            'comment' => $add['comment'],
            'createUser' => session()->get('m_name'),
            'createDate' => date('Y-m-d H:i:s'),
            'status' => 1
        ];

        // บันทึกข้อมูลลงในฐานข้อมูล
        $result = $supportJobModel->insertSupportJob($data);

        // อัปเดตสถานะงานในตาราง jobtask
        if($actionTypeFlag == 1){
            $jobtaskModel = new JobtaskModel();
            $jobtaskModel->where('ticketCode', $add['ticketid'])
                     ->set(['jobStatus' => 11,'updateUser' => session()->get('m_name'),'updatedate' => date('Y-m-d H:i:s')])
                     ->update();
        }
        if($actionTypeFlag == 2){
            $jobtaskModel = new JobtaskModel();
            $jobtaskModel->where('ticketCode', $add['ticketid'])
                     ->set(['jobStatus' => 12,'updateUser' => session()->get('m_name'),'updatedate' => date('Y-m-d H:i:s')])
                     ->update();
        }
        if ($result) {
            $response = [
                'transactionCode' => $transactionCode,
                'ticketCode' => $add['ticketid'],
                'month' => date('m'),
                'year' => date('Y'),
                'issueID' => $add['comment'],
                'status' => 'สำเร็จ',
                'message' => 'บันทึกข้อมูลสำเร็จ'

            ];
        } else {
            $response = [
                'transactionCode' => $transactionCode,
                'ticketCode' => $add['ticketid'],
                'month' => date('m'),
                'year' => date('Y'),
                'issueID' => $add['comment'],
                'status' => 'ล้มเหลว',
                'message' => 'เกิดข้อผิดพลาดในการบันทึกข้อมูล'
            ];
        }

        // ส่งผลลัพธ์กลับเป็น JSON
        return $this->response->setJSON($response);
        return $this->response->setJSON($add);
    }
    public function loadTransaction($ticketCode = false) {
 
      
        $supportJobModel = new SupportJobModel();
        $data['transactions'] = $supportJobModel
                                ->join('contactType ct', 'ct.id = supportjob.contactType', 'left')
                                ->join('actionType at', 'at.id = supportjob.actionType', 'left')
                                ->join('comment_type comt', 'comt.id = supportjob.comment', 'left')
                                ->where('ticketcode',$ticketCode)
                                ->findAll();

        return view('pages/transaction/support/loadTransaction', $data);
    }


}