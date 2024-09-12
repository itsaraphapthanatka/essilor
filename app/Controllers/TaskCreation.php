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
use App\Models\OrderCycleModel;

class TaskCreation extends BaseController{
    public function __construct(){
        $db = db_connect();
    }

    public function createtaskView(){
        $ecp = new EcpModel();
        $tag = new TagsModel();
        $tagsCate = new TagsCategoryModel();
        $categorize = new CategorizeModel();
        $orderCy = new OrderCycleModel();
        $data['ecp'] = $ecp->orderBy('id','ASC')->findAll();
        $data['tagCate'] = $tagsCate->orderBy('id','ASC')->findAll();
        $data['category'] = $categorize->orderBy('id','ASC')->findAll();
        $data['tag'] = $tag->orderBy('id','ASC')->findAll();
        $data['orderCycle'] = $orderCy->where(['cycle_status' => 'active'])->orderBy('id','ASC')->findAll();
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/task_creation/task_creation_add');
        echo view('pages/menu/footer');
    }
    public function edittaskView($seg1 = false){
        $jobtask = new JobtaskModel();
        $jobImage = new TaskImageModel();
        $tagbetaModel = new JobbetaModel();
        $jobtags = new JobtagsModel();
        $orderCy = new OrderCycleModel();
        $data['jobtask'] = $jobtask->asArray()->where(['id' => $seg1])->orderBy('id','ASC')->first();
        $data['JobImage'] = $jobImage->where(['ass_code' => $seg1])->orderBy('id','ASC')->findAll();
        $data['orderCycle'] = $orderCy->where(['cycle_status' => 'active'])->orderBy('id','ASC')->findAll();
        $ecp = new EcpModel();
        $tag = new TagsModel();
        $tagsCate = new TagsCategoryModel();
        $categorize = new CategorizeModel();
        $data['ecp'] = $ecp->orderBy('id','ASC')->findAll();
        $data['ecpname'] = $ecp->asArray()->where(['id' => $data['jobtask']['ecpid']])->orderBy('id','ASC')->first();
        $data['gettagbeta'] = $tagbetaModel->tagsBeta($seg1);
        $data['tags'] = $tag->orderBy('id', 'ASC')->findAll();
        $tagbetaArr = '';
        foreach ($data['gettagbeta'] as $key => $value) {
            $tagbetaArr .= $value['tag_name'] . ', ';

        }
        $data['tagbetaArr'] = rtrim($tagbetaArr, ', '); // Remove the trailing comma

        $data['tagCate'] = $tagsCate->orderBy('id','ASC')->findAll();
        $data['category'] = $categorize->orderBy('id','ASC')->findAll();
        $data['tag'] = $tag->orderBy('id','ASC')->findAll();
        echo view('pages/menu/header',$data);
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        echo view('pages/transaction/task_creation/task_creation_edit');
        echo view('pages/menu/footer');
    }
    public function create(){
        // Initialize Model
        $jobtask = new JobtaskModel();
        $jobtags = new JobtagsModel();
        $jobbeta = new JobbetaModel();
        $taskImage = new TaskImageModel();
        $add = $this->request->getPost();
        
        // return $this->response->setJSON($add);
        $JobtaskData = [
            'ecpid' => $add['ecpid'],
            'ecpcode' => $add['ecpcode'],
            'orderCycleId' => $add['cycle'],
            'tagsCategoryId' => $add['tagCategory'],
            'categoryId' => $add['Categorize'],
            'capture' => $add['kt_docs_tinymce_basic'],
            'jobStatus' => '1', //status Open
            'createuser' => session()->get('m_name'),
            'createdate'    => date('Y-m-d H:i:s')
        ];
        $jobtask->insert($JobtaskData);
        // Get the inserted order ID
        $jobtaskID = $jobtask->insertID();

        $jobtags->adelete($jobtaskID);
        $jobbeta->adelete($jobtaskID);
        
        foreach ($add['tags'] as $tag) {
            $datatags = [
                'jobid' => $jobtaskID,
                'tagsid' => $tag, // Access the id field from each result
            ];
            $jobtags->upserta($datatags,'tagsid');
        }
        $ass = json_decode($add['tagsbeta']);
        // var_dump($ass);
        // Check if 'tagbeta' exists and is an array
        if (isset($ass) && is_array($ass)) {
            foreach ($ass as $tag) {
                $datatags = [
                    'jobid' => $jobtaskID,
                    'tagsid' => $tag->id, // Access the 'id' field from each object
                ];
                $jobbeta->upserta($datatags, 'tagsid');
            }
        } else {
            // Optional: Log or handle the case where 'tagbeta' is missing
            var_dump("The 'tagbeta' key is missing or not an array.");
        }

        $dataImage = [
            'ass_code' => $jobtaskID,
        ];
        $taskImage->UpdateJobTaskImage($add['fakename'],$dataImage);

        $data = [
            'ecpcode' => $add['ecpcode'],
            // 'tagsbeta' => $add['tagbeta'],
            'tags' => $add['tags'],
            'cupture' => htmlspecialchars($add['kt_docs_tinymce_basic'],),
            'message' => 'Successful',
            'status' => 'success'
        ];

        return $this->response->setJSON($data);
    }
    public function Update(){
        // Initialize Model
        $jobtask = new JobtaskModel();
        $jobtags = new JobtagsModel();
        $jobbeta = new JobbetaModel();
        $taskImage = new TaskImageModel();
        $add = $this->request->getPost();

        // return $this->response->setJSON($add);
        $JobtaskData = [
            'id' => $add['jobid'],
            'ecpid' => $add['ecpid'],
            'trackingId' => $add['trackingID'],
            'ecpcode' => $add['ecpcode'],
            'orderCycleId' => $add['cycle'],
            'tagsCategoryId' => $add['tagCategory'],
            'categoryId' => $add['Categorize'],
            'capture' => $add['kt_docs_tinymce_basic'],
            'jobStatus' => !$add['trackingID'] ? '1' : '3', //status Open
            'updateuser' => session()->get('m_name'),
            'updatedate'    => date('Y-m-d H:i:s'),
            'calljob' => !$add['trackingID'] ? NULL : 'Y',
            'calluser' => !$add['trackingID'] ? NULL : session()->get('userid'),
            // 'comment' => !$add['trackingID'] ? NULL : 'User urgent',
        ];
        $jobtask->upsert($JobtaskData, 'id');
        // Get the inserted order ID
        $jobtaskID = $jobtask->insertID();

        $jobtags->adelete($jobtaskID);
        $jobbeta->adelete($jobtaskID);

        foreach ($add['tags'] as $tag) {
            $datatags = [
                'jobid' => $jobtaskID,
                'tagsid' => $tag, // Access the id field from each result
            ];
            $jobtags->upserta($datatags,'tagsid');
        }
        $ass = json_decode($add['tagsbeta']);
        // var_dump($ass);
        // Check if 'tagbeta' exists and is an array
        if (isset($ass) && is_array($ass)) {
            foreach ($ass as $tag) {
                $datatags = [
                    'jobid' => $jobtaskID,
                    'tagsid' => $tag->id, // Access the 'id' field from each object
                ];
                $jobbeta->upserta($datatags, 'tagsid');
            }
        } else {
            // Optional: Log or handle the case where 'tagbeta' is missing
            var_dump("The 'tagbeta' key is missing or not an array.");
        }

        $dataImage = [
            'ass_code' => $jobtaskID,
        ];
        $taskImage->UpdateJobTaskImage($add['fakename'],$dataImage);

        $data = [
            'ecpcode' => $add['ecpcode'],
            // 'tagsbeta' => $add['tagbeta'],
            'tags' => $add['tags'],
            'cupture' => htmlspecialchars($add['kt_docs_tinymce_basic'],),
            'message' => 'Successful',
            'status' => 'success'
        ];

        return $this->response->setJSON($data);
    }
    public function uploadFileTaskcreation() {
        $taskImage = new TaskImageModel();
        $validationRule = [
            'file' => [
                'label' => 'File',
                'rules' => 'uploaded[file]'
                    . '|mime_in[file,image/jpg,image/jpeg,image/png,image/gif,application/pdf,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document]'
                    . '|max_size[file,2000]', // Size in KB
            ],
        ];
    
        if (!$this->validate($validationRule)) {
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        }
    
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $rand = rand(1111, 9999);
            $date = date("Y-m-d ");
            $newName = $date . $rand . '.' . $file->getClientExtension();
            $file->move('uploads/taskImage/', $file->getName());
    
            // Optionally, resize the image if needed
    
            $ins1 = [
                'ass_imgg' => $file->getName(),
                'ass_num' => $this->request->getPost('data'),
                'createdate' => date('Y-m-d H:i:s')
            ];
    
            $taskImage->insert($ins1);
            $data['success'] = $file->getName();
            return $this->response->setJSON($data);
        } else {
            $data['upload_error'] = 'File upload failed';
            return $this->response->setJSON($data);
        }
    }
    public function deletefile($seg1 = false,$seg2 = false){
        $image = new TaskImageModel();
        $file = $image->where(['id' => $seg1])->delete();
        if ($file) {
          return redirect()->to('/edittask/'.$seg2);
        }
    }
}