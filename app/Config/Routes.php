<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//API Routs//



//API Routs//
$routes->get('/', 'Home::index');
$routes->get('/languageprint', 'Home::languageprint');
$routes->get('/modules/backend/admin/home', 'Home::admin',['filter' => 'authGuard','as' => 'admin-home']);

$routes->get('/language/(:segment)', 'Home::language/$1',['as' => 'language']);
$routes->get('/ajax/vehicle/list/(:num)', 'AjaxController::getVehicleByFleetId/$1');
$routes->post('/ajax/vehicle/pic/delete', 'AjaxController::picdelete');
$routes->get('/ajax/stand/all', 'AjaxController::getallStand');
$routes->get('/ajax/passanger/(:segment)/(:segment)', 'AjaxController::getPassanger/$1/$2');
$routes->get('/get/subtrip/(:segment)', 'AjaxController::getSubTrip/$1',['as' => 'subtrip']);
$routes->get('/ajax/coupon/(:segment)/(:segment)/(:segment)', 'AjaxController::couponValidation/$1/$2/$3');
$routes->get('modules/api/v1/countries', 'AjaxController::getAllCountry',['filter' => 'cors']);
$routes->get('get/lang/code/(:segment)', 'AjaxController::getLanguageCode/$1',['filter' => 'cors']);



// login
$routes->get('/login', 'Home::login',['as' => 'login']);
$routes->post('/auth/login', 'Login::auth',['filter' => 'cors','as' => 'auth-login']);
$routes->get('/logout', 'Login::logout',['filter' => 'cors','as' => 'auth-logout']);
$routes->get('/forgetload', 'Home::forgetpassload',['as' => 'forgetpassload']);
$routes->post('/checkmail', 'Home::checkmail',['as' => 'checkmail']);
$routes->get('/resetpass/(:segment)', 'Home::changePassword/$1',['as' => 'changepassword']);
$routes->get('/mail', 'Home::sendMail',['as' => 'sendMail']);
$routes->post('/confirm/password', 'Home::confirmPassword',['as' => 'confirmpassword']);


// delete software settings
$routes->get('/delete-check/(:segment)/(:segment)', 'DeleteSoftwareSettingsController::confirmation/$1/$2', ['as' => 'ss-delete-confirmation']);
$routes->delete('/delete/(:segment)/(:segment)', 'DeleteSoftwareSettingsController::delete/$1/$2', ['as' => 'ss-delete']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}


// $modules_path = ROOTPATH . 'Modules/';
// $modules = scandir($modules_path);

// foreach ($modules as $module) {
// 	if ($module === '.' || $module === '..') {
// 		continue;
// 	}

// 	if (is_dir($modules_path) . '/' . $module) {
// 		$routes_path = $modules_path . $module . '/Config/Routes.php';
// 		if (file_exists($routes_path)) {
// 			require $routes_path;
// 		} else {
// 			continue;
// 		}
// 	}
// }