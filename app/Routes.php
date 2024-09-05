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
$routes->post('loginLevel', 'Auth::loginLevel');
$routes->get('logout', 'Auth::logout');
$routes->get('keep-alive','Auth::keep_alive');
$routes->get('forgeSignOut/(:num)','Auth::forgeSignOut/$1');
$routes->get('home/(:any)', 'Pages::view/$1');
$routes->get('load_list_ecp_view', 'Pages::load_list_ecp_view');
$routes->get('getECP','Data::getECP');
$routes->get('checkusersonline','Auth::checkusersonline');
$routes->group('',['filter' => 'auth'], static function ($routes) {
    $routes->group('jsondata',static function ($routes)
    {
        $routes->get('getECP','Data::getECP');
        $routes->get('checkonline','Data::checkonline'); // checking online
        $routes->get('getUserOnline', 'Data::getUserOnline');
        $routes->get('getProjectAll','Data::getProjectAll');
        $routes->get('getsubproject/(:num)','Data::getsubproject/$1');
        $routes->get('getCompanyAll','Data::getCompanyAll');
        $routes->get('getBusinessUnit','Data::getBusinessUnit');
        $routes->get('getDepartment','Data::getDepartment');
        $routes->get('getEmployee','Data::getEmployee');
        $routes->get('getSystem','Data::getSystem'); // project job
        $routes->get('getJobType','Data::getJobType'); // job type
        $routes->get('getcostType','Data::getcostType'); // job type
        $routes->get('getGroupRole','Data::getGroupRole'); // Group Role
        $routes->get('getmaterialType','Data::getmaterialType'); // Material Type
        $routes->get('getmaterialGroup/(:any)','Data::getmaterialGroup/$1'); // Material Group
        $routes->get('getmaterialsubGroup/(:any)/(:any)','Data::getmaterialsubGroup/$1/$2'); // Material SubGroup
        $routes->get('getmaterialProduct/(:any)/(:any)/(:any)','Data::getmaterialProduct/$1/$2/$3'); // Material Product
        $routes->get('getmaterialSpec/(:any)/(:any)/(:any)/(:any)','Data::getmaterialSpec/$1/$2/$3/$4'); // Material Spec
        $routes->get('getmaterialBrand/(:any)/(:any)/(:any)/(:any)/(:any)','Data::getmaterialBrand/$1/$2/$3/$4/$5'); // Material Spec
        $routes->get('getVender','Data::getVender'); // Vender
        $routes->get('getUOM','Data::getUOM'); // UOM
        $routes->get('getCostControlType','Data::getCostControlType'); // Cost control type
        $routes->get('getCostControlGroup/(:any)','Data::getCostControlGroup/$1'); // Cost control group
        $routes->get('getCostControlsubGroup/(:any)/(:any)','Data::getCostControlsubGroup/$1/$2'); //  Cost control SubGroup
        $routes->get('getWarehouse/(:any)','Data::getWarehouse/$1'); //  Warehouse
        $routes->get('permission_user','Data::permission_user'); //  Module_data
        $routes->get('getModule_permisstion','Data::getModule_permisstion'); //  Module_data
        $routes->get('getModule_permisstion_detail','Data::getModule_permisstion_detail'); //  Module_data
        $routes->get('getTender','Data::getTender'); //  Tender
        $routes->get('getTenderWin','Data::getTenderWin'); //  Tender Win
        $routes->get('getTenderBoq','Data::getTenderBoq'); //  Tender Boq
        $routes->get('getBOQByTender/(:any)','BoqControl::getBOQByTender/$1'); //  Tender Boq

    });

    $routes->group('loadhtml',static function ($routes)
    {
        $routes->get('load_system/(:any)','Loadform::load_system/$1');
    });
  
    // lumpsum
   
    $routes->get('SelectCompany', 'Pages::SelectCompany');
    $routes->get('DataMain/(:num)/(:num)/(:num)', 'Master::main/$1/$2/$3');
    // company
    $routes->get('setupCompany/(:num)/(:num)/(:num)', 'Master::setupCompany/$1/$2/$3');
    $routes->get('companyNew/(:num)/(:num)/(:num)', 'Master::companyNew/$1/$2/$3');
    $routes->get('companyEdit/(:num)/(:num)/(:num)/(:num)', 'Master::companyEdit/$1/$2/$3/$4');
    // business Unit
    $routes->get('setupBusinessUnit/(:num)/(:num)/(:num)', 'Master::setupBusinessUnit/$1/$2/$3');
    $routes->get('BusinessUnitNew/(:num)/(:num)/(:num)', 'BusinessUnit::BusinessUnitNew/$1/$2/$3');
    $routes->get('BusinessUnitEdit/(:num)/(:num)/(:num)/(:num)', 'BusinessUnit::BusinessUnitEdit/$1/$2/$3/$4');
    //project
    $routes->get('setupProject/(:num)/(:num)/(:num)', 'Master::setupProject/$1/$2/$3');
    // sub project
    $routes->get('setupsubProject/(:any)', 'Master::setupsubProject/$1');
    $routes->get('projectCreate/(:num)/(:num)/(:num)', 'Project::projectCreate/$1/$2/$3');
    $routes->get('projectEdit/(:num)/(:num)/(:num)/(:num)', 'Project::projectEdit/$1/$2/$3/$4');
    // department
    $routes->get('setupDepartment/(:num)/(:num)/(:num)', 'Master::setupDepartment/$1/$2/$3');
    $routes->get('DepartmentNew/(:num)/(:num)/(:num)', 'Master::DepartmentNew/$1/$2/$3');
    $routes->get('DepartmentEdit/(:num)/(:num)/(:num)/(:num)', 'Master::DepartmentEdit/$1/$2/$3/$4');
    // Employee
    $routes->get('setupEmployee/(:num)/(:num)/(:num)', 'Master::setupEmployee/$1/$2/$3');
    $routes->get('addEmployee/(:num)/(:num)/(:num)', 'Master::addEmployee/$1/$2/$3');
    $routes->get('EmployeeEdit/(:num)/(:num)/(:num)/(:any)', 'Master::EmployeeEdit/$1/$2/$3/$4');

    $routes->post('upload_signature/(:num)', 'Master::upload_signature/$1');
    // project job
    $routes->get('setupProjectJob/(:num)/(:num)/(:num)', 'Master::setupProjectJob/$1/$2/$3');
    $routes->get('addProjectJob/(:num)/(:num)/(:num)', 'Master::addProjectJob/$1/$2/$3');
    $routes->get('editProjectJob/(:num)/(:num)/(:num)/(:any)', 'Master::editProjectJob/$1/$2/$3/$4');
    // Job Type
    $routes->get('setupJobtype/(:num)/(:num)/(:num)', 'Master::setupJobtype/$1/$2/$3');
    $routes->get('addJobtype/(:num)/(:num)/(:num)', 'Master::addJobtype/$1/$2/$3');
    $routes->get('editJobtype/(:num)/(:num)/(:num)/(:any)', 'Master::editJobtype/$1/$2/$3/$4');

    // Cost Type
    $routes->get('setupCostType/(:num)/(:num)/(:num)', 'Master::setupCostType/$1/$2/$3');
    $routes->get('addCostType/(:num)/(:num)/(:num)', 'Master::addCostType/$1/$2/$3');
    $routes->get('editCostType/(:num)/(:num)/(:num)/(:any)', 'Master::editCostType/$1/$2/$3/$4');
    // Runing No
    $routes->get('setupRunningNo/(:num)/(:num)/(:num)', 'Master::setupRunningNo/$1/$2/$3');
    // setup material type
    $routes->get('setupMaterial/(:num)/(:num)/(:num)', 'Master::setupMaterial/$1/$2/$3'); //material type
        $routes->get('addMaterial/(:num)/(:num)/(:num)', 'Meterial::addMaterial/$1/$2/$3'); //material type add
        $routes->get('editMaterial/(:num)/(:num)/(:num)/(:any)', 'Meterial::editMaterial/$1/$2/$3/$4'); //material type edit
    $routes->get('setupMaterialgroup/(:num)/(:num)/(:num)/(:any)', 'Master::setupMaterialgroup/$1/$2/$3/$4'); //material Group
    $routes->get('setupMaterialsubGroup/(:num)/(:num)/(:num)/(:any)/(:any)', 'Master::setupMaterialsubGroup/$1/$2/$3/$4/$5'); //material Sub Group
    $routes->get('setupMaterialProduct/(:num)/(:num)/(:num)/(:any)/(:any)/(:any)', 'Master::setupMaterialProduct/$1/$2/$3/$4/$5/$6'); //material Product
    $routes->get('setupMaterialSpec/(:num)/(:num)/(:num)/(:any)/(:any)/(:any)/(:any)', 'Master::setupMaterialSpec/$1/$2/$3/$4/$5/$6/$7'); //material Spec
    $routes->get('setupMaterialBrand/(:num)/(:num)/(:num)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Master::setupMaterialBrand/$1/$2/$3/$4/$5/$6/$7/$8'); //material Brand
    // setup vender
    $routes->get('setupVender/(:num)/(:num)/(:num)', 'Master::setupVender/$1/$2/$3');
    // setup UOM
    $routes->get('setupUnitOfMeasure/(:num)/(:num)/(:num)', 'Master::setupUnitOfMeasure/$1/$2/$3');
    // setup Cost Control
    $routes->get('setupCostCode/(:num)/(:num)/(:num)', 'Master::setupCostCode/$1/$2/$3');// cost type
    $routes->get('setupCostControlgroup/(:num)/(:num)/(:num)/(:any)', 'Master::setupCostControlgroup/$1/$2/$3/$4'); //Cost Group
    $routes->get('setupCostControlsubGroup/(:num)/(:num)/(:num)/(:any)/(:any)', 'Master::setupCostControlsubGroup/$1/$2/$3/$4/$5'); //cost Sub Group
    // setup warehouse
    $routes->get('setupProjectWareHouse/(:num)/(:num)/(:num)', 'Master::setupProjectWareHouse/$1/$2/$3');
    $routes->get('setupWareHouse/(:num)/(:num)/(:num)/(:any)', 'Master::setupWareHouse/$1/$2/$3/$4');
    // Setup permission
    $routes->get('setupPermission/(:num)/(:num)/(:num)', 'Master::setupPermission/$1/$2/$3');
    $routes->get('getpermisstion_project/(:num)/(:num)/(:num)/(:any)', 'Master::getpermisstion_project/$1/$2/$3/$4');
    $routes->get('getpermisstion_module/(:num)/(:num)/(:num)/(:any)', 'Master::getpermisstion_module/$1/$2/$3/$4');

    // Setup Customer
    $routes->get('setupCustomer/(:num)/(:num)/(:num)', 'Master::setupCustomer/$1/$2/$3');


    
    //transuction
    //Cost Control
    $routes->get('setupTender/(:num)/(:num)/(:num)', 'CostControl::setupTender/$1/$2/$3');
    $routes->get('ArchiveTender/(:num)/(:num)/(:num)', 'CostControl::ArchiveTender/$1/$2/$3');
    $routes->get('newTender/(:num)/(:num)/(:num)', 'CostControl::newTender/$1/$2/$3');
    $routes->get('EditTender/(:num)/(:num)/(:num)/(:any)', 'CostControl::EditTender/$1/$2/$3/$4');
    // BOQ
    $routes->get('setupBOQ/(:num)/(:num)/(:num)', 'CostControl::setupBOQ/$1/$2/$3');
    $routes->get('selectboq/(:num)/(:num)/(:num)/(:any)', 'CostControl::selectboq/$1/$2/$3/$4');

    
    //PR
    $routes->get('purchase_requisition/(:num)/(:num)', 'Purchase_Requisition::purchase_requisition/$1/$2/$3');


   
    
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
