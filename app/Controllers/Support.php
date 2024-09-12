<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JobtaskModel;

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

}