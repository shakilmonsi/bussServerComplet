<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/passangers/type',["filter" => "cors","namespace" => "\Modules\Passanger\Controllers"], function($routes)
{
    $routes->get('new', 'Passanger::new',['as' => 'new-passanger']);
    $routes->post('', 'Passanger::create',['as' => 'create-passanger']);
    $routes->get('', 'Passanger::index',['as' => 'index-passanger']);
    $routes->get('trash', 'Passanger::index/1', ['as' => 'trash-index-passanger']);
    $routes->get('restore/(:segment)', 'Passanger::restore/$1', ['as' => 'restore-passanger']);
    $routes->get('(:segment)/edit', 'Passanger::edit/$1',['as' => 'edit-passanger']);
    $routes->put('(:segment)', 'Passanger::update/$1',['as' => 'update-passanger']);
    $routes->delete('(:segment)', 'Passanger::delete/$1',['as' => 'delete-passanger']);
    
});


$routes->group('modules/api/v1/passangers',["filter" => "cors","namespace" => "\Modules\Passanger\Controllers\Api"], function($routes)
{
    $routes->get('(:segment)/(:segment)', 'Passanger::getPassangerdata/$1/$2',['as' => 'get-passangerdata']);
    $routes->post('login', 'Passanger::getPassanger',['as' => 'info-passangerdata']);
    $routes->get('info', 'Passanger::getPassangerinfo',['as' => 'profile-passangerinfo']);
    $routes->get('tickets', 'Passanger::getTickets',['as' => 'getallticket-passangerinfo']);
    $routes->post('picupload', 'Passanger::passangerpicuplod',['as' => 'picupload-passangerdata']);
    $routes->post('password', 'Passanger::changePassword',['as' => 'changepass-passangerdata']);
    $routes->post('profileinfo', 'Passanger::changePassengerinfo',['as' => 'passengerinfo-passangerdata']);

    $routes->post('signup', 'Passanger::regUser',['as' => 'signup-passangerdata']);

    $routes->post('email', 'Passanger::checkEmail',['as' => 'check-email']);
    $routes->post('mobile', 'Passanger::checkMobile',['as' => 'check-mobile']);
    $routes->post('nid', 'Passanger::checkIdNumber',['as' => 'check-nid']);
    
    $routes->post('loginsocial', 'Passanger::loginsocial',['as' => 'social-signup']);
});






