<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EcpModel;
use App\Models\TagsModel;
use App\Models\TagsCategoryModel;
use App\Models\CategorizeModel;
use App\Models\JobtaskModel;
use App\Models\JobtagsModel;
use App\Models\JobbetaModel;
use App\Models\TaskImageModel;

class Keyin extends BaseController{
    public function __construct()
    {
        $db = db_connect();
    }
    public function fifoview(){
        $ecp = new EcpModel();
        $tag = new TagsModel();
        $tagsCate = new TagsCategoryModel();
        $categorize = new CategorizeModel();
        $data['ecp'] = $ecp->orderBy('id','ASC')->findAll();
        $data['tagCate'] = $tagsCate->orderBy('id','ASC')->findAll();
        $data['category'] = $categorize->orderBy('id','ASC')->findAll();
        $data['tag'] = $tag->orderBy('id','ASC')->findAll();
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/keyin/list_fifo_view');
        echo view('pages/menu/footer');
    }
    public function stock_lens_fifo_view(){
        $ecp = new EcpModel();
        $tag = new TagsModel();
        $tagsCate = new TagsCategoryModel();
        $categorize = new CategorizeModel();
        $data['ecp'] = $ecp->orderBy('id','ASC')->findAll();
        $data['tagCate'] = $tagsCate->orderBy('id','ASC')->findAll();
        $data['category'] = $categorize->orderBy('id','ASC')->findAll();
        $data['tag'] = $tag->orderBy('id','ASC')->findAll();
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/keyin/stock_lens_fifo_view');
        echo view('pages/menu/footer');
    }
    public function myjobvip(){
        $jobtask = new JobtaskModel();
        $data['res'] = $jobtask->getJobtaskCalljob(2);
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/myjob/myjob_vip');
        echo view('pages/menu/footer');
    }
    public function myjobfifo(){
        $jobtask = new JobtaskModel();
        $data['res'] = $jobtask->getJobtaskListFifo(1);
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/myjob/myjob_fifo');
        echo view('pages/menu/footer');
    }
    public function myjobstock(){
        $jobtask = new JobtaskModel();
        $data['res'] = $jobtask->getJobtaskStockTags(2);
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/myjob/myjob_stock_lens_fifo');
        echo view('pages/menu/footer');
    }
    public function takejob($sag1 = false){
        $jobtask = new JobtaskModel();
        $data['res'] = $jobtask->getJobtaskByID($sag1);
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/myjob/takejob');
        echo view('pages/menu/footer');
    }

    public function SaveCommentByTrackingID(){
        $taskJob = new JobtaskModel();
        $add = $this->request->getPost();
    
        $data = [
            'trackingId' => !$add['trackingID'] ? null : $add['trackingID'],
            'comment' => !$add['comment'] ? null : $add['comment'],
            'jobStatus' => 3,
            'updateuser' => session()->get('m_name'),
            'updatedate' => date('Y-m-d H:i:s')
        ];
        if($taskJob->update($add['taskID'],$data)){
            $data = [
                'trackingID' => $add['trackingID'],
                'comment' => intval($add['comment']),
                'message' => 'Successful',
                'status' => 'success'
            ];
        }else{
            $data = [
                'trackingID' => $add['trackingID'],
                'comment' => intval($add['comment']),
                'message' => 'Fail Save Comment!!',
                'status' => 'error'
            ];
        }
        return $this->response->setJSON($data);
    }

    public function returnjob($sag1 = false, $sag2 = false) {
        $jobtask = new JobtaskModel();
        $data = [
            'jobStatus' => 1,
            'calljob' => null,
            'calluser' => null
        ];
        
        if ($sag1) {
            $res = $jobtask->update($sag1, $data);
            return redirect()->to('/'.$sag2.'/');
        } else {
            return false;
        }
    }
}