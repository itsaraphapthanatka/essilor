<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use CodeIgniter\Files\File;


class User extends BaseController{
    public function __construct(){
        $db = db_connect();
    }

    public function index(){
        echo view('pages/menu/header');
        echo view('pages/menu/menuManagement');
        echo view('pages/user/user');
        echo view('pages/menu/footer');
    }

    public function getAllUsers(){
        $users = new UsersModel();
        $query =  $users->getUsers();
        $count =  $users->orderBy('id', 'DESC')->countAllResults();
        $arr = [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $query

        ];
        return $this->response->setJSON($arr);
    }

    public function editUser($seg1 = false){
        $userModel = new UsersModel();
        $data['id'] = $seg1;
        $data['res'] = $userModel->asArray()->where(['id' => $seg1])->first();
        echo view('pages/menu/header');
        echo view('pages/menu/menuManagement');
        echo view('pages/user/editUser',$data);
        echo view('pages/menu/footer');
    }

    public function saveAddUser(){
        $UsersModel = new UsersModel();
        // return $this->response->setJSON($add);
        $add = $this->request->getPost();
        $img = $this->request->getFile('userfile');
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                    'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    // 'max_size[userfile,100]',
                    // 'max_dims[userfile,1024,768]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            $data = [
                'user_name' => $add['user_name'],
                'user_email' => $add['user_email'],
                'user_password' => password_hash($add['user_pass'],PASSWORD_BCRYPT),
                'prekey' => $add['user_pass'],
                'mobile' => $add['mobile'],
                'user_role' => $add['user_role'],
                'compcode' => session()->get('compcode'),
                'user_created_at' => date('Y-m-d H:i:s'),
                'user_status' => 'active',
            ];
            $UsersModel->insert($data);
            return redirect()->to('/usersManage');
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = 'profile/';
            $img->move($filepath);
            // $filepath = WRITEPATH . 'profile/';

            $data = ['uploaded_fileinfo' => new File($filepath)];

            // return view('upload_success', $data);
            $data = [
                'user_name' => $add['user_name'],
                'user_email' => $add['user_email'],
                'user_password' => password_hash($add['user_pass'],PASSWORD_BCRYPT),
                'prekey' => $add['user_pass'],
                'mobile' => $add['mobile'],
                'user_role' => $add['user_role'],
                'compcode' => session()->get('compcode'),
                'user_status' => 'active',
                'user_created_at' => date('Y-m-d H:i:s'),
                'user_img' => $img->getName(),
            ];
            $result =  $UsersModel->insert($data);
            return redirect()->to('/usersManage');
        }
        $data = ['errors' => 'The file has already been moved.'];
    }

    public function saveEditUser(){
        $UsersModel = new UsersModel();
        $add = $this->request->getPost();
        $img = $this->request->getFile('userfile');
        // return $this->response->setJSON($img);

        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                    'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    // 'max_size[userfile,100]',
                    // 'max_dims[userfile,1024,768]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            $data = [
                'user_name' => $add['fname'],
                'user_email' => $add['email'],
                'user_role' => $add['user_role'],
                'user_password' => password_hash($add['new_password'],PASSWORD_BCRYPT),
                'prekey' => $add['new_password'],
                'mobile' => $add['phone'],
                // 'compcode' => session()->get('compcode'),
            ];
            $UsersModel->update_profile($add['cid'],$data);
            return redirect()->to('/usersManage');
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = 'profile/';
            $img->move($filepath);
            // $filepath = WRITEPATH . 'profile/';

            $data = ['uploaded_fileinfo' => new File($filepath)];

            // return view('upload_success', $data);
            $data = [
                'user_name' => $add['fname'],
                'user_email' => $add['email'],
                'user_role' => $add['user_role'],
                'user_password' => password_hash($add['new_password'],PASSWORD_BCRYPT),
                'prekey' => $add['new_password'],
                'mobile' => $add['phone'],
                // 'compcode' => session()->get('compcode'),
                'user_img' => $img->getName(),
            ];
            $result =  $UsersModel->update_profile($add['cid'],$data);
            return redirect()->to('/usersManage');
        }
        $data = ['errors' => 'The file has already been moved.'];
    }

    public function deleteuser(){
        $UsersModel = new UsersModel();
        $id = $this->request->getPost('id');
        $result = $UsersModel->where(['id'=> $id])->delete();
        if ($result) {
            $message = "User Date are DELETE successfully.";
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
        return $this->response->setJSON($arr);

    }
}