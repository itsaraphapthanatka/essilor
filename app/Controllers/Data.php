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
use App\Models\SetupModel;

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
                    ->like('customer_cd', substr($search,0,6))
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

     // backup database for xampp
     public function backup_xampp() {
        helper('filesystem');  // Load the filesystem helper
    
        // Database credentials
        $db = \Config\Database::connect();
        $dbHost = $db->hostname;
        $dbUsername = $db->username;
        $dbPassword = $db->password;
        $dbName = $db->database;
    
        // Set file path and name
        $path = 'uploads\\bk\\database\\';  // Windows-style path
        $filename = $dbName . '_' . date('dMY_Hi') . '.sql.gz'; // .gz extension for gzip compression
        $backupFile = escapeshellarg($path . $filename);
    
        // Ensure the directory exists or create it
        if (!is_dir($path)) {
            if (!mkdir($path, 0777, true) && !is_dir($path)) {
                return $this->response->setStatusCode(500)->setBody("Failed to create backup directory.");
            }
        }
    
        // Path to mysqldump.exe in XAMPP on Windows
        $mysqldumpPath = 'C:\\xampp\\mysql\\bin\\mysqldump.exe';  // Adjust if needed
    
        // MySQL dump command
        $command = "{$mysqldumpPath} --host={$dbHost} --user={$dbUsername} --password={$dbPassword} {$dbName} > {$backupFile}";
    
        if (function_exists('shell_exec') && function_exists('exec')) {
            echo 'Shell commands are enabled <br/>';
        } else {
            echo 'Shell commands are disabled <br/>';
        }
    
        // Execute the command and capture output
        exec($command, $output, $result);
        var_dump($output);
        var_dump($result);
    
        // Check if the command was successful
        if ($result !== 0) {
            return $this->response->setStatusCode(500)->setBody("Backup generation failed. Please check server permissions.");
        }
    
        // Send the backup file for download
        return $this->response->download($path . $filename, null)->setFileName($filename);
    }
    
    public function exportExcel(){
        $db = db_connect();
        // $query = $db->query("SELECT 
        //                         e.customer_name,
        //                         j.ecpcode
        //                     FROM jobtask j 
        //                     LEFT JOIN ecp e ON j.ecpid = e.id
        //                     LEFT JOIN jobtask_image jti ON j.id = jti.jobid
        //                     "
        //                     );
        $query = $db->query('
                              SELECT
                                jt.id,
                                jt.ecpcode AS ecpcode,
                                e.customer_name,
                                jt.trackingId AS trackingId,
                                GROUP_CONCAT(DISTINCT tb.tag_name SEPARATOR " , ") AS tagsBeta,
                                GROUP_CONCAT(DISTINCT tj.tag_name SEPARATOR " , ") AS tagsJob,
                                GROUP_CONCAT(DISTINCT ai.ass_imgg SEPARATOR " , ") AS image_url,
                                ct.categoriesName,
                                DATE_FORMAT(jt.createdate, "%d/%m/%Y %H:%i") AS createdate,
                                js.statusname,
                                e.morning_only,
                                e.evening_only,
                                e.working_day_only,
                                e.customer_type,
                                jt.calljob,
                                jt.capture,
                                jt.jobStatus,
                                jt.qcstatus,
                                jt.createuser,
                                oc.cyclename,
                                jt.orderCycleId as ocid
                            FROM jobtask jt
                            JOIN ecp e ON jt.ecpid = e.id
                            LEFT JOIN tagsbeta tbeta ON jt.id = tbeta.jobid
                            LEFT JOIN tagsjob tjob ON jt.id = tjob.jobid
                            LEFT JOIN tags tb ON tbeta.tagsid = tb.id
                            LEFT JOIN tags tj ON tjob.tagsid = tj.id
                            LEFT JOIN categories ct ON jt.categoryId = ct.id
                            LEFT JOIN jobstatus js ON jt.jobStatus = js.id
                            LEFT JOIN ordercycle oc ON jt.orderCycleId = oc.id
                            LEFT JOIN ass_img ai ON ai.ass_code = jt.id
                            GROUP BY jt.id, jt.ecpcode, e.customer_name, jt.trackingId, ct.categoriesName, jt.createdate, js.statusname,
                                    e.morning_only, e.evening_only, e.working_day_only, e.customer_type, jt.calljob, jt.capture,
                                    jt.jobStatus, jt.qcstatus, jt.createuser, oc.cyclename, jt.orderCycleId
                            ');
        $data = $query->getResultArray();
    
        // Load PHPExcel library
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
         // Set header
         $header = array_keys($data[0]);
         $header[0] = 'ECP Code'; // Change the first header text
         $header[1] = 'Customer Name'; // Change the second header text
         $header[2] = 'trackingId';  // Change the second header text
         $header[3] = 'capture'; // Change the second header text
         $header[4] = 'tagsBeta'; // Change the second header text 
         $header[5] = 'tagsJob'; // Change the second header text
         $header[6] = 'image_url'; // Change the second header text
         $header[7] = 'categoriesName'; // Change the second header text
         $header[8] = 'createdate'; // Change the second header text
         $header[9] = 'statusname'; // Change the second header text
         $header[10] = 'customer_type'; // Change the second header text
         $header[11] = 'jobStatus'; // Change the second header text
         $header[12] = 'createuser'; // Change the second header text
         $header[13] = 'cyclename'; // Change the second header text

          // ตั้งค่าความกว้างของคอลัมน์
        $sheet->getColumnDimension('A')->setWidth(15); // ECP Code  
        $sheet->getColumnDimension('B')->setWidth(50); // Customer Name
        $sheet->getColumnDimension('C')->setWidth(20); // trackingId
        $sheet->getColumnDimension('D')->setWidth(30); // capture
        $sheet->getColumnDimension('E')->setWidth(30); // tagsBeta  
        $sheet->getColumnDimension('F')->setWidth(30); // tagsJob
        $sheet->getColumnDimension('G')->setWidth(40); // image_url 
        $sheet->getColumnDimension('H')->setWidth(20); // categoriesName
        $sheet->getColumnDimension('I')->setWidth(20); // createdate    
        $sheet->getColumnDimension('J')->setWidth(15); // statusname
        $sheet->getColumnDimension('K')->setWidth(15); // customer_type 
        $sheet->getColumnDimension('L')->setWidth(15); // jobStatus
        $sheet->getColumnDimension('M')->setWidth(20); // createuser            
        $sheet->getColumnDimension('N')->setWidth(25); // cyclename
        $sheet->fromArray($header, NULL, 'A1');

         // ตั้งค่าเส้นขอบคอลัมน์
        $lastColumn = $sheet->getHighestColumn();
        $lastRow = $sheet->getHighestRow();
        $range = 'A1:' . $lastColumn . $lastRow;
        $styleBorder = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
                'vertical' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $sheet->getStyle($range)->applyFromArray($styleBorder);
        // Set data
        $row = 2;
        foreach ($data as $record) {
            $sheet->setCellValue('A' . $row, $record['ecpcode']);
            $sheet->setCellValue('B' . $row, $record['customer_name']);
            $sheet->setCellValue('C' . $row, $record['trackingId']);
            $sheet->setCellValue('D' . $row, $record['capture']);
            $sheet->setCellValue('E' . $row, $record['tagsBeta']);
            $sheet->setCellValue('F' . $row, $record['tagsJob']);
            $sheet->setCellValue('G' . $row, base_url().'uploads/taskImage/' . $record['image_url']);
            $sheet->setCellValue('H' . $row, $record['categoriesName']);
            $sheet->setCellValue('I' . $row, $record['createdate']);
            $sheet->setCellValue('J' . $row, $record['statusname']);
            $sheet->setCellValue('K' . $row, $record['customer_type']);
            $sheet->setCellValue('L' . $row, $record['jobStatus']);
            $sheet->setCellValue('M' . $row, $record['createuser']);
            $sheet->setCellValue('N' . $row, $record['cyclename']);
            $row++;
        }
    
        $path = 'uploads/bk/excel/';  // Path to save the file
    
        // Ensure the directory exists or create it
        if (!is_dir($path)) {
            if (!mkdir($path, 0777, true) && !is_dir($path)) {
                return $this->response->setStatusCode(500)->setBody("Failed to create backup directory."); 
            }
        }
        
        // Write to Excel file
        $filename = 'jobtask_export_' . date('Ymd_His') . '.xlsx';
        $filePath = $path . $filename;
        
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save($filePath);
    
        // Return the file as a download response
        return $this->response->download($filePath, null)->setFileName($filename);
    }
    
    public function insert100rows(){
        $job = new JobtaskModel();
        $beta = new JobbetaModel();
        $tag = new JobtagsModel();
        $res = $job->asArray()->where(['id' => 26])->first();
        $resbeta = $beta->where(['jobid' => 26])->orderBy('id','asc')->findAll();
        $resTag = $tag->where(['jobid' => 26])->orderBy('id','asc')->findAll();
        for ($i = 0; $i < 100; $i++) {
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

    public function enableIframe(){
        $add = $this->request->getPost('iframe');
        if ($add) {
            $config = new SetupModel();
            $addData = [
                'value' => $add
            ];
            $result = $config->update(['id' => '1'], $addData);

            if ($result) {
                $data = [
                    'status' => 'success',
                    'response' => $add
                ];
            } else {
                $data = [
                    'status' => 'error',
                    'response' => 'Failed to update iframe configuration'
                ];
            }
        } else {
            $data = [
                'status' => 'error',
                'response' => 'No iframe data provided'
            ];
        }

        return $this->response->setJSON($data);
    }
    public function loadiframe(){
        $config = new SetupModel();
        $data['config'] = $config->asArray()->where(['setup' => 'iframe'])->orderBy('id','ASC')->first();
        echo view('pages/overview/loadiframe',$data);
    }
}