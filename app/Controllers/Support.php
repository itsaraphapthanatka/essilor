<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobtaskModel;
use App\Models\ActionTypeModel;
use App\Models\ContactModel;

class Support extends BaseController{
    public function __construct()
    {
        $db = db_connect();
    }
    public function loadtable($sag1 = false){
        $data['issueid'] = $sag1;
        echo view('pages/transaction/support/load_jobtask_issue',$data);
    }
    public function getJobtaskSupport($sag1 = false){
        $jobtask = new JobtaskModel();
        $data = $jobtask->getJobtaskSupport($sag1);

    
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
        return $this->response->setJSON($add);
    }

}