<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EcpModel;
use App\Models\TagsCategoryModel;
use App\Models\TagsModel;

class Pages extends BaseController{

	public function __construct()
	{
		$db = db_connect();

	}
	public function overview(){
		echo view('pages/menu/header');
		echo view('pages/menu/menuManagement');
		echo view('pages/overview/main');
		echo view('pages/menu/footer');
	}
	public function view($seg1 = false){
		$data['type'] = $seg1;
		if ($seg1 == 'member') {
			echo view('pages/menu/header');
			echo view('pages/menu/menuManagement');
			echo view('pages/home',$data);
			echo view('pages/menu/footer');
		}else{
			echo view('pages/keyin',$data);
		}
	}

	public function create_ecp(){
		echo view('pages/menu/header');
		echo view('pages/menu/menuManagement');
		echo view('pages/ecp/load_create_ecp');
		echo view('pages/menu/footer');
	}
	public function edit_ecp($seg1 = false){
		$EcpModel = new EcpModel();
		$data['ecp'] = $EcpModel->where(['id' => $seg1])->first();
		echo view('pages/menu/header',$data);
		echo view('pages/menu/menuManagement');
		echo view('pages/ecp/load_edit_ecp');
		echo view('pages/menu/footer');
	}
	public function view_ecp(){
		echo view('pages/menu/header');
		echo view('pages/menu/menuManagement');
		echo view('pages/ecp/list_ecp_view');
		echo view('pages/menu/footer');
	}
	public function view_tags(){
		echo view('pages/menu/header');
		echo view('pages/menu/menuManagement');
		echo view('pages/tags/load_tags_view');
		echo view('pages/menu/footer');
	}
	public function create_tag(){
		$category = new TagsCategoryModel();
		$data['category'] = $category->where(['category_status' => 'active'])->orderBy('id','asc')->findAll();
		echo view('pages/menu/header',$data);
		echo view('pages/menu/menuManagement');
		echo view('pages/tags/load_create_tag');
		echo view('pages/menu/footer');
	}
	public function edit_tag($sag1 = false){
		$tags = new TagsModel();
		$data['tags'] = $tags->asArray()->where(['id' => $sag1])->orderBy('id','asc')->first();
		$category = new TagsCategoryModel();
		$data['category'] = $category->where(['category_status' => 'active'])->orderBy('id','asc')->findAll();
		echo view('pages/menu/header',$data);
		echo view('pages/menu/menuManagement');
		echo view('pages/tags/load_edit_tag');
		echo view('pages/menu/footer');
	}
	public function level($seg1 = false){
		$data['type'] = $seg1;
		echo view('pages/keyin',$data);
	}
	public function level2($seg1 = false, $seg2 = false,$seg3 = false,$seg4 = false){
		$data['type'] = $seg1;
		$data['type2'] = $seg2;
		$data['type3'] = $seg3;
		$data['type4'] = $seg4;
		echo view('pages/keyin',$data);
	}


	// public function load_create_ecp(){
	// 	echo view('pages/ecp/load_create_ecp');
	// }

	public function load_list_ecp_view(){
		echo view('pages/ecp/list_ecp_view');
	}

	public function load_list_keyin_view(){
		echo view('pages/list_keyin_view');
	}

	public function keyin($seq1 = false){
		$data['type'] = $seq1;
		echo view('pages/keyin',$data);
	}
}