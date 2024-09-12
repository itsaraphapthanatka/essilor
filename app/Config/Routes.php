<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// Th/e Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
$routes->post('login', 'Auth::auth');
$routes->get('index_backup', 'Auth::index_backup');

$routes->get('guest', 'Auth::login_guest');



$routes->group('',['filter' => 'auth'], static function ($routes) {
    $routes->get('login_success', 'Auth::login_success');
$routes->post('loginLevel', 'Auth::loginLevel');
$routes->get('logout', 'Auth::logout');
$routes->get('keep-alive','Auth::keep_alive');
$routes->get('forgeSignOut/(:num)','Auth::forgeSignOut/$1');
$routes->get('home/(:any)', 'Pages::view/$1');
$routes->get('view_ecp', 'Pages::view_ecp');
$routes->get('level/(:any)', 'Pages::level/$1');
$routes->get('level2/(:any)/(:any)/(:any)/(:any)', 'Pages::level2/$1/$2/$3/$4');
$routes->get('keyin/(:any)', 'Pages::keyin/$1');
$routes->get('load_list_keyin_view', 'Pages::load_list_keyin_view');
$routes->get('info','Data::info');
$routes->get('real_ip','Data::get_client_ip');
$routes->get('checkusersonline','Auth::checkusersonline');
///overview
$routes->get('overview', 'Pages::overview');
// ECP
$routes->get('getECP','Data::getECP');
$routes->get('load_list_ecp_view', 'Pages::load_list_ecp_view');
$routes->get('create_ecp', 'Pages::create_ecp');
$routes->get('edit_ecp/(:any)', 'Pages::edit_ecp/$1');
// $routes->get('load_create_ecp', 'Pages::load_create_ecp');
$routes->post('CreateEcp','Ecp::CreateEcp');
$routes->post('UpdateEcp','Ecp::UpdateEcp');
$routes->post('getecp', 'Ecp::getecp');
$routes->get('tagsArr', 'Tags::tagsArr');
$routes->post('getTagECP','Ecp::getTagECP');

//Tag
$routes->post('CrateTags','Tags::CrateTags');
$routes->post('UpdateTags','Tags::UpdateTags');
$routes->get('edit_tag/(:any)','Pages::edit_tag/$1');
$routes->post('deltag','Tags::deltag');
$routes->get('getTags','Data::getTags');
$routes->get('view_tags', 'Pages::view_tags');
$routes->get('create_tag', 'Pages::create_tag');

//Tag Category
$routes->get('TagCategory','Tags::TagCategory');
$routes->get('getTagCategory','Data::getTagCategory');
$routes->get('load_create_tagCategory','Tags::load_create_tagCategory');
$routes->post('CreateTagCategory','Tags::CreateTagCategory');
$routes->post('update_tagCategory','Tags::update_tagCategory');
$routes->get('edit_tagCategory/(:any)','Tags::edit_tagCategory/$1');
$routes->post('delaacstegorietag','Tags::delaacstegorietag');
$routes->post('findTags','Tags::findTags');

// Users Management
$routes->get('usersManage','User::index');
$routes->get('editUser/(:num)', 'User::editUser/$1');
$routes->post('saveAddUser', 'User::saveAddUser');
$routes->post('saveEditUser', 'User::saveEditUser');
$routes->post('deleteuser', 'User::deleteuser');


// Task Creation
$routes->get('TaskCreation', 'Transaction::TaskCreationList');
$routes->get('createtask', 'TaskCreation::createtaskView');
$routes->get('edittask/(:num)', 'TaskCreation::edittaskView/$1');
$routes->get('main', 'Auth::home');
$routes->post('CreateJobTask', 'TaskCreation::Create');
$routes->post('EditJobTask', 'TaskCreation::Update');
$routes->get('deletefile/(:num)/(:num)','TaskCreation::deletefile/$1/$2');

// KeyIn
$routes->get('fifoview', 'Keyin::fifoview');
$routes->get('stock_lens_fifo_view', 'Keyin::stock_lens_fifo_view');
$routes->get('myjobvip', 'Keyin::myjobvip');
$routes->get('myjobfifo', 'Keyin::myjobfifo');
$routes->get('myjobstock', 'Keyin::myjobstock');
$routes->get('takejob/(:num)', 'Keyin::takejob/$1');
$routes->get('returnjob/(:num)/(:any)', 'Keyin::returnjob/$1/$2');
$routes->post('SaveCommentByTrackingID', 'Keyin::SaveCommentByTrackingID');

// QC/Answer
$routes->get('myjobqc','QCAnswer::myjobqc');
$routes->get('myCalljobqc','QCAnswer::myCalljobqc');
$routes->post('SaveQC','QCAnswer::saveqc');
$routes->post('SaveRejectQC','QCAnswer::SaveRejectQC');

// support
$routes->get('loadtable/(:num)','Support::loadtable/$1');



    $routes->group('import',static function ($routes)
    {
        $routes->post('ecpdata','Data::ImportECP');
        $routes->post('uploadFileTaskcreation','TaskCreation::uploadFileTaskcreation');
    });
    $routes->group('jsondata',static function ($routes)
    {
        $routes->get('getAllUsers', 'User::getAllUsers');
        $routes->get('getJobtask/(:num)', 'Transaction::getJobtask/$1');
        $routes->get('getJobtaskscroll', 'Transaction::getJobtaskscroll');
        $routes->get('getJobtaskListVIP', 'Transaction::getJobtaskListVIP');
        $routes->get('getJobtaskListFiFo/(:num)', 'Transaction::getJobtaskListFiFo/$1');
        $routes->get('getJobtaskCalljob/(:num)', 'Transaction::getJobtaskCalljob/$1');
        $routes->get('getJobtaskUpdateCalljob/(:num)', 'Transaction::getJobtaskUpdateCalljob/$1');
        $routes->get('getJobtaskStockTags/(:num)', 'Transaction::getJobtaskStockTags/$1');
        $routes->get('getJobtaskStockTags/(:num)', 'Transaction::getJobtaskStockTags/$1');
        $routes->get('getJobtaskQCProcess/(:num)', 'Transaction::getJobtaskQCProcess/$1');
        $routes->get('getAllTags', 'Tags::getAllTags');
        $routes->get('getJobtaskSupport/(:num)', 'Support::getJobtaskSupport/$1');
    });
    $routes->group('controlData',static function ($routes)
    {
        $routes->get('trancateData','Data::trancateData');
        $routes->get('trancateMasterData','Data::trancateMasterData');
        $routes->get('backup','Data::backup');

        $routes->get('insert100rows','Data::insert100rows');
    });
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
