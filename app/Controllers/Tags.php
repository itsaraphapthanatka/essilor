<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TagsModel;
use App\Models\TagsCategoryModel;
use App\Models\JobtaskModel;
use App\Models\JobtagsModel;

class Tags extends BaseController{
    public function __construct()
	{
		$db = db_connect();
	}

    public function CrateTags(){
        $tagsModel = new TagsModel();
        $add = $this->request->getPost();
        $chkDuplicate = $tagsModel->where(['tag_name' => $add['tagname']])->first();
        if ($chkDuplicate) {
            return $this->response->setJSON(["status" => 'error','message' => 'Tag name already exists'], 400);
        }
            $data = [
                'tag_name' => $add['tagname'],
                'tag_meaning' => $add['tag_meaning'],
                'tag_category' => $add['tag_category'],
                'text_color' => $add['text_color'],
                'background_color' => $add['bg_color'],
                'tag_status' => 'active',
                'CreatedDate' => date('Y-m-d H:i:s'),
                'CreatedBy' => session()->get('m_name'),
            ];
            $result = $tagsModel->insert($data);
            if ($result) {
                $arr = [
                    "data" => $data,
                    "status" => 'success',
                    "message" => 'Form has been successfully submitted!',
                ];
            }
       return  $this->response->setJSON($arr);
    }
    public function UpdateTags(){
        $tagsModel = new TagsModel();
        $add = $this->request->getPost();
            $data = [
                'tag_name' => $add['tagname'],
                'tag_meaning' => $add['tag_meaning'],
                'tag_category' => $add['tag_category'],
                'text_color' => $add['text_color'],
                'background_color' => $add['bg_color'],
                'tag_status' => 'active',
                'UpdatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => session()->get('m_name'),
            ];
            $result = $tagsModel->update($add['tagid'],$data);
            if ($result) {
                $arr = [
                    "data" => $data,
                    "status" => 'success',
                    "message" => 'Form has been successfully submitted!',
                ];
            }
       return  $this->response->setJSON($arr);
    }
    public function TagCategory(){
        echo view('pages/menu/header');
		echo view('pages/menu/menuManagement');
		echo view('pages/tags/load_tags_category');
		echo view('pages/menu/footer');
    }
    public function load_create_tagCategory(){
		echo view('pages/menu/header');
		echo view('pages/menu/menuManagement');
		echo view('pages/tags/load_create_tagCategory');
		echo view('pages/menu/footer');
	}
    public function CreateTagCategory(){
        $tagsCateModel = new TagsCategoryModel();
        $add = $this->request->getPost();
        $chkDuplicate = $tagsCateModel->where(['category_name' => $add['categoryname']])->first();
        if ($chkDuplicate) {
            return $this->response->setJSON(["status" => 'error','message' => 'Category name already exists'], 400);
        }
            $data = [
                'category_name' => $add['categoryname'],
                'category_status' => $add['tag_category_status'],
                'isStock' => $add['isStock'],
                'CreatedDate' => date('Y-m-d H:i:s'),
                'CreatedBy' => session()->get('m_name'),
            ];
            $result = $tagsCateModel->insert($data);
            if ($result) {
                $arr = [
                    "data" => $data,
                    "status" => 'success',
                    "message" => 'Form has been successfully submitted!',
                ];
            }
       return  $this->response->setJSON($arr);
    }
    public function edit_tagCategory($sag1 = false){
		$category = new TagsCategoryModel();
		$data['category'] = $category->asArray()->where(['id' => $sag1])->orderBy('id','asc')->first();
		echo view('pages/menu/header',$data);
		echo view('pages/menu/menuManagement');
		echo view('pages/tags/load_edit_tagCategory');
		echo view('pages/menu/footer');
	}
    public function update_tagCategory(){
        $tagsCategoryModel = new TagsCategoryModel();
        $add = $this->request->getPost();
            $data = [
                'category_name' => $add['categoryname'],
                'category_status' => $add['tag_category_status'],
                'isStock' => $add['isStock'],
                'UpdatedDate' => date('Y-m-d H:i:s'),
                'UpdatedBy' => session()->get('m_name'),
            ];
            $result = $tagsCategoryModel->update($add['categoryid'],$data);
            if ($result) {
                $arr = [
                    "data" => $data,
                    "status" => 'success',
                    "message" => 'Form has been successfully submitted!',
                ];
            }
       return  $this->response->setJSON($arr);
    }
    public function deltag(){
        $sag1 = $this->request->getPost('id');
        $jobtask = new JobtaskModel();
        $tagsModel = new TagsModel();
        $totalCounts = $jobtask->getTotalCounts($sag1);
        if($totalCounts->totalUsage > 0){
            $message = "Tag available is not delete";
            $arr = [
                "result" => "warning",
                "message" => $message,
            ];
        }else{
            $result = $tagsModel->where(['id'=> $sag1])->delete();
            if ($result) {
                $message = "Delete successfully.";
                $arr = [
                    "result" => "successed",
                    "message" => $message,
                ];
            }else{
                $message = "Something went wrong";
                $arr = [
                    "result" => "error",
                    "message" => $message,
                ];
            }
        }
        return $this->response->setJSON($arr);
    }
    public function delaacstegorietag(){
        $sag1 = $this->request->getPost('id');

        $tagsCategoryModel = new TagsCategoryModel();
        $totalCounts = $tagsCategoryModel->getTagCategoryUsage($sag1);
        if($totalCounts->totalUsage > 0){
            $message = "{$totalCounts->category_name} available is not delete";
            $arr = [
                "result" => "warning",
                "message" => $message,
            ];
        }else{
            $result = $tagsCategoryModel->where(['id'=> $sag1])->delete();
            if ($result) {
                $message = "{$totalCounts->category_name} are DELETE successfully.";
                $arr = [
                    "result" => "successed",
                    "message" => $message,
                ];
            }else{
                $message = "Something went wrong";
                $arr = [
                    "result" => "error",
                    "message" => $message,
                ];
            }
        }
        return $this->response->setJSON($arr);
    }
    public function tagsArr(){
        $tag = new TagsModel();
        $tags = $tag->orderBy('id','ASC')->findAll();
        $tagData = [];
        foreach ($tags as $tag) {
            $tagData[] = [
                'value' => $tag['tag_name'],
                'background_color' => $tag['background_color'],
                'text_color' => $tag['text_color']
            ];
        }

        // Return JSON response
        return $this->response->setJSON($tagData);
    }
    public function findTags_() {
        $selectedValue = $this->request->getPost('selectedValue');
        $tagsModel = new TagsModel();
        // Fetch tags based on the selected category
        $tags = $tagsModel->where(['tag_category' => $selectedValue])->orderBy('id', 'ASC')->findAll();
        $tagsAll = $tagsModel->orderBy('id', 'ASC')->findAll();
        // Extract tag names for the 'tt' array
        $tagNames = array_map(function($tag) {
            return $tag['tag_name'];
        }, $tags);

        $tagNamesAll = array_map(function($tagsAll) {
            return $tagsAll['tag_name'];
        }, $tagsAll);
        // Prepare response data
        $response = [
            'status' => 'success',
            'tags' => $tags,
            'tagsAll' => $tagsAll,
            'tt' => array_filter($tagNames),
        ];
        return $this->response->setJSON($response);
    }
    public function findTags() {
        $db = db_connect();
        $selectedValue = $this->request->getPost('selectedValue');
        $jobID = $this->request->getPost('jobID');
        $tagsModel = new TagsModel();
        $jobTag = new JobtagsModel();

      
        // $tagjob = $jobTag->where(['jobid' => $jobID])->orderBy('id','ASC')->findAll();
        $query = $db->query('select
                tags.id,
                tags.tag_name,
                tags.tag_meaning,
                tags.tag_category,
                tags.text_color,
                tags.background_color,
                tags.CreatedDate,
                tags.CreatedBy,
                tags.UpdatedDate,
                tags.UpdatedBy,
                tags.DeletedDate,
                tags.duedate,
                tags.tag_status
            FROM
                tagsjob
            INNER JOIN
                tags
                ON 
                    tagsjob.tagsid = tags.id
            WHERE 
                tagsjob.jobid = "'.$jobID.'"
        ');
        $data = $query->getResultArray();

        // Fetch tags based on the selected category
        // $tags = $tagsModel->where(['tag_category' => $selectedValue])->orderBy('id', 'ASC')->findAll();
        $tagsAll = $tagsModel->orderBy('id', 'ASC')->findAll();
        // Extract tag names for the 'tt' array
        $tagNames = array_map(function($tag) {
            return $tag['tag_name'];
        }, $data);

        $tagNamesAll = array_map(function($tagsAll) {
            return $tagsAll['tag_name'];
        }, $tagsAll);
        // Prepare response data
        $response = [
            'status' => 'success',
            'tags' => $data,
            'tagsAll' => $tagsAll,
            'tt' => array_filter($tagNames),
        ];
        return $this->response->setJSON($response);
    }


    public function getAllTags() {
        $tagsModel = new TagsModel();
        // Fetch tags based on the selected category
        
        $tagsAll = $tagsModel->orderBy('id', 'ASC')->findAll();
        // Extract tag names for the 'tt' array
        $tagNamesAll = array_map(function($tagsAll) {
            return $tagsAll['tag_name'];
        }, $tagsAll);
        // Prepare response data
        $response = [
            'status' => 'success',
            'tags' => array_filter($tagNamesAll),
           
        ];
        return $this->response->setJSON($response);
    }
}