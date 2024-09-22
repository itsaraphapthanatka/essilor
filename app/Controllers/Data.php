<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\EcpModel;
use CodeIgniter\Files\File;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as excel;
use App\Models\UserOnlineModel;
use App\Models\TagsModel;
use App\Models\TagsCategoryModel;
use App\Models\JobtagsModel;
use App\Models\JobbetaModel;
use App\Models\JobtaskModel;
use App\Models\TaskImageModel;

class Data extends BaseController{
    protected $helpers = ['form'];
    public function __construct()
	{
		$db = db_connect();
	}
    public function getECP(){
        $ecp = new EcpModel();
		$query = $ecp->orderBy('id','ASC')->findAll();
		$count = $ecp->orderBy('id','ASC')->countAllResults();
        $arr = [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $query

        ];
        return $this->response->setJSON($arr);
    }
    public function getEcpCodes()
    {
        $search = $this->request->getGet('search');
        $ecp = new EcpModel();
        $data = $ecp->select('customer_cd','customer_name')
                    ->like('customer_cd', $search)
                    ->limit(10)
                    ->findAll();
        
        return $this->response->setJSON($data);
    }
    public function getTags(){
        $tags = new TagsModel();
        $result = $tags->getTags();
        $arr = [
            "recordsTotal" => $result['totalResults'],
            "recordsFiltered" => $result['totalResults'],
            "data" => $result['data']

        ];
        return $this->response->setJSON($arr);
    }
    public function getTagCategory(){
        $tags = new TagsCategoryModel();
		$query = $tags->orderBy('id','ASC')->findAll();
		$count = $tags->orderBy('id','ASC')->countAllResults();
        $arr = [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $query

        ];
        return $this->response->setJSON($arr);
    }
    public function ImportECP(){
        $empmodel = new EcpModel();
        $validationRule = [
            'userfile' => [
                'label' => 'Excel File',
                'rules' => [
                    'uploaded[userfile]',
                    // 'is_image[userfile]',
                    'ext_in[userfile,csv,xlsx]',
                    // 'max_size[userfile,100]',
                    // 'max_dims[userfile,1024,768]',
                ],
            ],
        ];
        if (! $this->validateData([], $validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
            print_r($data);
        }

        $filename = $this->request->getFile('userfile');
        // if (! $filename->hasMoved()) {
        //     $filepath = WRITEPATH . 'uploads/' . $filename->store();

        //     $data = ['uploaded_fileinfo' => new File($filepath)];
            $name = $filename->getName();
            $tempName = $filename->getTempName();
            $arr_file = explode(".",$name);
            $extension = end($arr_file);
            if ('csv' == $extension) {
                $reader = new Csv();
            }else{
                $reader = new excel();
            }
            $spreadsheet = $reader->load($tempName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            if (!empty($sheetData)) {
                $empmodel->trancateData();
                for ($i=1; $i < count($sheetData); $i++) {
                    $customer_cd = $sheetData[$i][0];
                    $customer_name = $sheetData[$i][1];
                    $payment_term_cd = $sheetData[$i][2];
                    $customer_alert_1 = $sheetData[$i][3];
                    $customer_alert_2 = $sheetData[$i][4];
                    $customer_alert_3 = $sheetData[$i][5];
                    $promo_code = $sheetData[$i][6];
                    $bu = $sheetData[$i][7];
                    $promo_type = $sheetData[$i][8];
                    $promo_name = $sheetData[$i][9];
                    $promo_start_date = $sheetData[$i][10];
                    $promo_end_date = $sheetData[$i][11];
                    $promo_details = $sheetData[$i][12];
                    $customer_type = $sheetData[$i][13];
                    $region = $sheetData[$i][14];
                    $routecode = $sheetData[$i][15];
                    $routename = $sheetData[$i][16];
                    $show_price = $sheetData[$i][17];
                    $leave_bill = $sheetData[$i][18];
                    $store_comment = $sheetData[$i][19];
                    $logis_remark = $sheetData[$i][20];
                    $morning_only = $sheetData[$i][21];
                    $evening_only = $sheetData[$i][22];
                    $working_day_only = $sheetData[$i][23];
                    $logis_note = $sheetData[$i][24];
                    $logis_note2 = $sheetData[$i][25];
                    $logis_delivery = $sheetData[$i][26];
                    $logis_comment = $sheetData[$i][27];
                    $c_customer_parent_group = $sheetData[$i][28];
                    $c_experts = $sheetData[$i][29];
                    $c_partner = $sheetData[$i][30];
                    $nikon_lenswear_partner = $sheetData[$i][31];
                    $upgrade_coating = $sheetData[$i][32];
                    $upgrade_azio = $sheetData[$i][33];
                    $upgrade_f360 = $sheetData[$i][34];
                    $data = [
                        'customer_cd' => $customer_cd,
                        'customer_name' => $customer_name,
                        'payment_term_cd' => $payment_term_cd,
                        'customer_alert_1' => $customer_alert_1,
                        'customer_alert_2' => $customer_alert_2,
                        'customer_alert_3' => $customer_alert_3,
                        'promo_code' => $promo_code,
                        'bu' => $bu,
                        'promo_type' => $promo_type,
                        'promo_name' => $promo_name,
                        'promo_start_date' => $promo_start_date,
                        'promo_end_date' => $promo_end_date,
                        'promo_details' => $promo_details,
                        'customer_type' => $customer_type,
                        'region' => $region,
                        'routecode' => $routecode,
                        'routename' => $routename,
                        'show_price' => $show_price,
                        'leave_bill' => $leave_bill,
                        'store_comment' => $store_comment,
                        'logis_remark' => $logis_remark,
                        'morning_only' => !$morning_only ? "": $morning_only,
                        'evening_only' => !$evening_only ? "": $evening_only,
                        'working_day_only' => !$working_day_only ? "" : $working_day_only,
                        'logis_note' => $logis_note,
                        'logis_note2' => $logis_note2,
                        'logis_delivery' => $logis_delivery,
                        'logis_comment' => $logis_comment,
                        'c_customer_parent_group' => $c_customer_parent_group,
                        'c_experts' => $c_experts,
                        'c_partner' => $c_partner,
                        'nikon_lenswear_partner' => $nikon_lenswear_partner,
                        'upgrade_coating' => $upgrade_coating,
                        'upgrade_azio' => $upgrade_azio,
                        'upgrade_f360' => $upgrade_f360,
                    ];
                    $empmodel->insertValue($data);
                }
            }else{
                print_r($sheetData);
            }

            print_r($sheetData);
        // }

        // $data = ['errors' => 'The file has already been moved.'];

        // print_r($data);
    }
    public function getUserOnline(){
        $useronline = new UserOnlineModel();
        $query = $useronline->getUsersOnline();
        return $this->response->setJSON($query);
    }
    public function info(){
        echo get_current_user();
    }
    function get_client_ip() {

        $client_ip = $_SERVER['REMOTE_ADDR'];
        echo "Client IP Address: " . $client_ip;


    }
    public function trancateData() {
        $db = db_connect();
        $db->query('SET FOREIGN_KEY_CHECKS = 0;');
    
        $jobtaskModel = new JobtaskModel();
        $JobtagsModel = new JobtagsModel();
        $JobbetaModel = new JobbetaModel();
        $TaskImageModel = new TaskImageModel();
    
        $jobtaskModel->truncate();
        $JobtagsModel->truncate();
        $JobbetaModel->truncate();
        $TaskImageModel->truncate();
    
        $db->query('SET FOREIGN_KEY_CHECKS = 1;');
    
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Tables truncated successfully.'
        ]);
    }
    public function trancateMasterData() {
        $db = db_connect();
        $db->query('SET FOREIGN_KEY_CHECKS = 0;');

        $tag = new TagsModel();
        $tagcategory = new TagsCategoryModel();
        $ecp = new EcpModel();

    
  
        $tag->truncate();
        $tagcategory->truncate();
        $ecp->truncate();
    
        $db->query('SET FOREIGN_KEY_CHECKS = 1;');
    
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Tables truncated successfully.'
        ]);
    }
    public function backup() {
        helper('filesystem');  // Load the filesystem helper
    
        // Database credentials
        $db = \Config\Database::connect();
        $dbHost = $db->hostname;
        $dbUsername = $db->username;
        $dbPassword = $db->password;
        $dbName = $db->database;
    
        // Set file path and name
        $path = 'uploads/bk/database/';
        $filename = $dbName . '_' . date('dMY_Hi') . '.sql.gz'; // .gz extension for gzip compression
    
        // Ensure the directory exists or create it
        if (!is_dir($path)) {
            if (!mkdir($path, 0777, true) && !is_dir($path)) {
                return $this->response->setStatusCode(500)->setBody("Failed to create backup directory.");
            }
        }
    
        // MySQL dump command
        $command = "mysqldump --host={$dbHost} --user={$dbUsername} --password={$dbPassword} {$dbName} | gzip > {$path}{$filename}";
    
        // Execute the command and capture output
        exec($command, $output, $result);
    
        // Check if the command was successful
        if ($result !== 0) {
            return $this->response->setStatusCode(500)->setBody("Backup generation failed. Please check server permissions.");
        }
    
        // Send the backup file for download
        return $this->response->download($path . $filename, null)->setFileName($filename);
    }
    
    
    
    public function insert100rows(){
        $job = new JobtaskModel();
        $beta = new JobbetaModel();
        $tag = new JobtagsModel();
        $res = $job->asArray()->where(['id' => 26])->first();
        $resbeta = $beta->where(['jobid' => 26])->orderBy('id','asc')->findAll();
        $resTag = $tag->where(['jobid' => 26])->orderBy('id','asc')->findAll();
        for ($i = 0; $i < 500; $i++) {
            $data = [
                'ecpid' => $res['ecpid'],
                'ecpcode' => $res['ecpcode'],
                'orderCycleId' => $res['orderCycleId'],
                'tagsCategoryId' => $res['tagsCategoryId'],
                'categoryId' => $res['categoryId'],
                'capture' => $res['capture'],
                'jobStatus' => 1,
            ];
            $newID = $job->insert($data);
          
            foreach ($resbeta as $key => $value) {
            $data = [
                'jobid' => $newID,
                'tagsid' => $value['tagsid'],
            ];
            $beta->insert($data);
            }
            foreach ($resTag as $key => $value) {
                $data = [
                    'jobid' => $newID,
                    'tagsid' => $value['tagsid'],
                ];
            $tag->insert($data);
            }
            
            echo "Inserted job ID: $newID<br/>";
            ob_flush();
            flush();
        }
    }
}