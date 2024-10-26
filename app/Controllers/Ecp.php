<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EcpModel;
use App\Models\TagsModel;
use App\Models\JobtaskModel;
use App\Models\JobbetaModel;

class Ecp extends BaseController{
    public function __construct(){
        $db = db_connect();
    }
    public function CreateEcp(){
        $ecp = new EcpModel();
        $add = $this->request->getPost();
        $chkDuplicate = $ecp->where(['customer_name' => $add['ecpname']])->first();
        if ($chkDuplicate) {
            return $this->response->setJSON(["status" => 'error','message' => 'ECP name already exists'], 400);
        }
        $customer_type = (!$add['c_customer_parent_group']) ? "standard" : 'VIP' ;
        $data = [
            'customer_cd' => $add['ecpcode'],
            'customer_name' => $add['ecpname'],
            'payment_term_cd' => $add['payment'],
            'customer_alert_1' => $add['customer_alert1'],
            'customer_alert_2' => $add['customer_alert_2'],
            'customer_alert_3' => $add['customer_alert_3'],
            'promo_code' => $add['title'], //ชื่อเรื่อง
            'bu' => $add['bu'],
            'promo_type' => $add['promo_type'],
            'promo_name' => $add['promo_name'],
            'promo_start_date' => $add['calendar_event_start_date'],
            'promo_end_date' => $add['calendar_event_end_date'],
            'promo_details' => $add['detail'],
            'customer_type' => $customer_type,
            'region' => $add['region'],
            'routecode' => $add['routecode'],
            'routename' => $add['routecode'],
            'show_price' => $add['show_price'],
            'leave_bill' => $add['leave_bill'],
            'store_comment' => $add['store_comment'],
            'logis_remark' => $add['logis_remark'],
            'morning_only' => $add['morning_only'],
            'evening_only' => $add['evening_only'],
            'working_day_only' => $add['working_day_only'],
            'logis_note' => $add['logis_note'],
            'logis_note2' => $add['logis_note2'],
            'logis_delivery' => $add['logis_delivery'],
            'logis_comment' => $add['logis_comment'],
            'c_customer_parent_group' => $add['c_customer_parent_group'],
            'c_experts' => $add['essilor_experts'],
            'c_partner' => $add['essilor_partner'],
            'nikon_lenswear_partner' => $add['nikon_lenwear_partner'],
            'upgrade_coating' => $add['upgrade_coating'],
            'upgrade_azio' => $add['upgrade_azio'],
            'upgrade_f360' => $add['upgrade_f360'],
        ];

        $result = $ecp->insert($data);
        if ($result) {
            $arr = [
                "data" => $data,
                "status" => 'success',
                "message" => 'Form has been successfully submitted!',
            ];
        }
        return $this->response->setJSON($arr);
    }
    public function UpdateEcp(){
        $ecp = new EcpModel();
        $add = $this->request->getPost();
        $customer_type = (!$add['c_customer_parent_group']) ? "standard" : 'VIP' ;
        $data = [
            'customer_cd' => $add['ecpcode'],
            'customer_name' => $add['ecpname'],
            'payment_term_cd' => $add['payment'],
            'customer_alert_1' => $add['customer_alert1'],
            'customer_alert_2' => $add['customer_alert_2'],
            'customer_alert_3' => $add['customer_alert_3'],
            'promo_code' => $add['title'], //ชื่อเรื่อง
            'bu' => $add['bu'],
            'promo_type' => $add['promo_type'],
            'promo_name' => $add['promo_name'],
            'promo_start_date' => $add['calendar_event_start_date'],
            'promo_end_date' => $add['calendar_event_end_date'],
            'promo_details' => $add['detail'],
            'customer_type' => $customer_type,
            'region' => $add['region'],
            'routecode' => $add['routecode'],
            'routename' => $add['routecode'],
            'show_price' => $add['show_price'],
            'leave_bill' => $add['leave_bill'],
            'store_comment' => $add['store_comment'],
            'logis_remark' => $add['logis_remark'],
            'morning_only' => $add['morning_only'],
            'evening_only' => $add['evening_only'],
            'working_day_only' => $add['working_day_only'],
            'logis_note' => $add['logis_note'],
            'logis_note2' => $add['logis_note2'],
            'logis_delivery' => $add['logis_delivery'],
            'logis_comment' => $add['logis_comment'],
            'c_customer_parent_group' => $add['c_customer_parent_group'],
            'c_experts' => $add['essilor_experts'],
            'c_partner' => $add['essilor_partner'],
            'nikon_lenswear_partner' => $add['nikon_lenwear_partner'],
            'upgrade_coating' => $add['upgrade_coating'],
            'upgrade_azio' => $add['upgrade_azio'],
            'upgrade_f360' => $add['upgrade_f360'],
        ];

        $result = $ecp->update($add['ecpid'],$data);
        if ($result) {
            $arr = [
                "data" => $data,
                "status" => 'success',
                "message" => 'Form has been successfully submitted!',
            ];
        }
        return $this->response->setJSON($arr);
    }
    public function getecp() {
        $selectedValue = $this->request->getPost('selectedValue');
        $ecp = new EcpModel();
        $tags = new TagsModel();
        $ecp = $ecp->asArray()->where(['customer_cd' => $selectedValue])->first();
        $tags = $tags->orderBy('id', 'ASC')->findAll();
        // Default values for cycle array
        $cycle = [];
        // Ensure cycle contains all expected strings
        $cycle = array_merge($cycle, array_filter([
            $ecp['morning_only'] === 'yes' ? 'วิ่งเช้ารอบเดียว' : null,
            $ecp['evening_only'] === 'yes' ? 'วิ่งเย็นรอบเดียว' : null,
            $ecp['working_day_only'] === 'yes' ? 'วิ่งแค่ จ-ศ' : null
        ]));
        $arrs = array_filter([$ecp['customer_type'], $ecp['payment_term_cd'], $ecp['c_partner'], $ecp['c_experts'], $ecp['routecode']]);
        // เปลี่ยนให้แสดงเฉพาะค่าที่ไม่ว่าง
        $arrs = array_values(array_filter([$ecp['customer_type'], $ecp['payment_term_cd'], $ecp['c_partner'], $ecp['c_experts'], $ecp['routecode']]));
        $response = [
            'status' => 'success',
            'data' => $ecp,
            'tags' => $tags,
            'tt' => $arrs,
            'cycle' => $cycle
        ];
        return $this->response->setJSON($response);
    }
    public function getTagECP(){
        $jobID = $this->request->getPost('jobid');
        $ecpID = $this->request->getPost('ecpid');
        $ecp = new EcpModel();
        $tags = new TagsModel();
        $jobsTask = new JobtaskModel();
        $beta = new JobbetaModel();
        // $tagsbeta = $beta->where(['jobid' => $jobID])->orderBy('id','ASC')->findAll();
        $data['gettagbeta'] = $beta->tagsBeta($jobID);
        $tagbetaArr = [];

        foreach ($data['gettagbeta'] as $key => $value) {
            $tagbetaArr[] = $value['tag_name'];
        }

        // Convert the array to a string later if needed
        $tagbetaString = implode(', ', $tagbetaArr);
        $ecp = $ecp->asArray()->where(['id' => $ecpID])->first();
        $tags = $tags->orderBy('id', 'ASC')->findAll();
        // Default values for cycle array
        $cycle = [];
        // Ensure cycle contains all expected strings
        $cycle = array_merge($cycle, array_filter([
            $ecp['morning_only'] === 'yes' ? 'วิ่งเช้ารอบเดียว' : null,
            $ecp['evening_only'] === 'yes' ? 'วิ่งเย็นรอบเดียว' : null,
            $ecp['working_day_only'] === 'yes' ? 'วิ่งแค่ จ-ศ' : null
        ]));
        $response = [
            'status' => 'success',
            'data' => $ecp,
            'tags' => $tags,
            'tt' => $tagbetaArr,
            'cycle' => $cycle
        ];
        return $this->response->setJSON($response);
    }
}
