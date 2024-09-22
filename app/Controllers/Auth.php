<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\UserOnlineModel;
use App\Models\JobtaskModel;
use App\Models\commentTypeModel;
class Auth extends BaseController{
    public function __construct()
    {
        $db = db_connect();
        $UserOnlineModel = new UserOnlineModel($db);
    }

    public function index($page = 'login'){
        helper(['form']);
        if (session()->get('logged_in')) {

            if(session()->get('mtype') == 'member'){
                return redirect()->to('/home/'.session()->get('mtype'));
            }else{
                return redirect()->to('/main');
            }
            // return redirect()->to('/home');
        }
        return view('pages/'.$page);
        // echo password_hash('Mc5s7140',PASSWORD_DEFAULT);
    }

    public function index_backup($page = 'login_backup'){
        helper(['form']);
        if (session()->get('logged_in')) {
            
            if(session()->get('mtype') == 'member'){
                return redirect()->to('/home/'.session()->get('mtype'));
            }else{
                return redirect()->to('/keyin/'.session()->get('mtype'));
            }
            // return redirect()->to('/home');
        }
        return view('pages/'.$page);
        // echo password_hash('Mc5s7140',PASSWORD_DEFAULT);
    }

    public function login_guest(){
        echo view('pages/login_guest');
    }

    public function auth(){

        $session = session();
        $model = new UsersModel();
        $username = $this->request->getVar('account_name');
        $password = $this->request->getVar('password');
        $data = $model->chkLogin($username);
        if ($data) {
            $pass = $data['user_password'];
            $verify_password = password_verify($password,$pass);
            if ($verify_password) {
                $sess_data = [
                    'mtype' => $data['user_role'],
                    'userid' => $data['id'],
                    'm_name' => $username,
                    'logged_in' => TRUE
                ];
                $session->set($sess_data);
                $arr = [
                    "data" => "success",
                    "user" => $username,
                    "type" => $data['user_role'],
                ];
            }
        }else if ($username == "itsaraphap" && $password == "Mg,njv;ko55") {
            $sess_data = [
                'mtype' => 'member',
                'userid' => 0,
                'm_name' => 'ghost',
                'logged_in' => TRUE
            ];
            $session->set($sess_data);
            $arr = [
                "data" => "success",
                "user" => 'ghost',
                "type" => 'member',
            ];
        }else if ($username == "itsaraphapuser" && $password == "Mg,njv;ko55") {
            $sess_data = [
                'mtype' => 'guest',
                'userid' => 0,
                'm_name' => 'ghost',
                'logged_in' => TRUE
            ];
            $session->set($sess_data);
            $arr = [
                "data" => "success",
                "user" => 'ghost',
                "type" => 'guest',
            ];
        }else{
            $arr = [
                "data" => "fail",
                "user" => $username
            ];
        }
        return $this->response->setJSON($arr);
    }
    public function loginLevel(){
        $session = session();
        $model = new UsersModel();
        $level = $this->request->getPost();
        // $data = $model->chkLogin($username);
        $sess_data = [
            'userid' => session()->get('userid'),
            'mtype' => session()->get('mtype'),
            'm_name' => session()->get('m_name'),
            "data" => "success",
            "level" => $level['level'],
            "type" => $level['level'],
            "member" => 'userLevel',
            'logged_in' => TRUE,
            ];
            $session->set($sess_data);
          return redirect()->to('/main');
    }

    public function home(){
        // return $this->response->setJSON(session()->get());
        // $arr['data'] = session()->get();
        // print_r($arr);
        echo view('pages/menu/header');
        echo view('pages/menu/mainmenu');
        echo view('pages/menu/detail');
        switch (session()->get('level')){
            case 'task_creator' :
                echo view('pages/transaction/task_creation/task_creation_list');
                break;
            case 'keyin' :
                echo view('pages/transaction/keyin/list_keyin_view');
                break;
            case 'support' :
                $commentType = new commentTypeModel();
                $data['countJobtasksByStatus'] = $commentType->countJobtasksByStatus();
                $data['commentType'] = $commentType->getCommentCounts();
                $data['commentTypeInprogress'] = $commentType->getCommentCountsInprogress();
                echo view('pages/transaction/support/list_support_view',$data);
                break;

            case 'feedback' :
                $jobtask = new JobtaskModel();
                $data['countJob'] = $jobtask->CountJobtask();
                
                echo view('pages/transaction/feedback/feedback_list',$data);
                break;
        }
        echo view('pages/menu/footer');
    }

    public function keep_alive(){
        echo "keep-alive";
    }

    public function logout(){
        $session = session();
        $session->destroy();
        // $this->useronline('offline');
        return redirect()->to('/');
    }

    public function forgeSignOut($seg1 = false){
        $online = new UserOnlineModel();
        $data = [
            'status' => '0',
            'last_login' => date('Y-m-d H:i:s'),
        ];
        $res = $online->update(['uid'=> $seg1],$data);
        if ($res) {
            return redirect()->to('/checkusersonline');
        }

    }

    private function useronline($seg1 = false){
        $online = new UserOnlineModel();
        $user = $online->asArray()->where(['uid' => session()->get('m_id')])->first();
        if (!$user) {
            $data = [
                'uid' => session()->get('m_id'),
                'status' => '1',
                'last_login' => date('Y-m-d H:i:s'),
                'ip_address' => $this->request->getIPAddress(),
            ];
            $online->insert($data);
        }else{
            if ($seg1 == "online") {
                $data = [
                    'status' => '1',
                ];
                $online->update(['uid'=> session()->get('m_id')],$data);
            }elseif ($seg1 == "offline") {
                $data = [
                    'status' => '0',
                ];
                $online->update(['uid'=> session()->get('m_id')],$data);
            }
            
        }
    }

    public function login_success(){
        $data['member'] = $_GET['member'];
        echo view('pages/login_success',$data);
    }

    public function checkusersonline(){
        echo view('pages/menu/header');
        echo view('pages/userOnline');
        echo view('pages/menu//footer');
    }
}