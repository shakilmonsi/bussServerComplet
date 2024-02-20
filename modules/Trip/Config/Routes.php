<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/trips',["filter" => "cors","namespace" => "\Modules\Trip\Controllers"], function($routes)
{
    $routes->get('new', 'Trip::new',['as' => 'new-trip']);
    $routes->post('', 'Trip::create',['as' => 'create-trip']);
    $routes->get('', 'Trip::index',['as' => 'index-trip']);
    $routes->get('find/trip', 'Trip::findtrip',['as' => 'findtrip-trip']);
    $routes->get('(:segment)/edit', 'Trip::edit/$1',['as' => 'edit-trip']);
    $routes->post('get/all/trip', 'Trip::getAllTrip',['as' => 'getall-trip']);
    $routes->put('(:segment)', 'Trip::update/$1',['as' => 'update-trip']);
    $routes->delete('(:segment)', 'Trip::delete/$1',['as' => 'delete-trip']);
    
});


$routes->group('modules/backend/subtrips',["filter" => "cors","namespace" => "\Modules\Trip\Controllers"], function($routes)
{
    $routes->get('new/(:segment)', 'Subtrip::new/$1',['as' => 'new-Subtrip']);
    $routes->get('(:segment)', 'Subtrip::index/$1',['as' => 'index-Subtrip']);
    $routes->get('(:segment)/edit', 'Subtrip::edit/$1',['as' => 'edit-Subtrip']);
    $routes->post('', 'Subtrip::create',['as' => 'create-Subtrip']);
    $routes->put('(:segment)', 'Subtrip::update/$1',['as' => 'update-Subtrip']);
    $routes->delete('(:segment)', 'Subtrip::delete/$1',['as' => 'delete-Subtrip']);
    
});


$routes->group('modules/backend/discountround',["filter" => "cors","namespace" => "\Modules\Trip\Controllers"], function($routes)
{
    $routes->get('new', 'Roundtripdiscount::new',['as' => 'new-roundtripdiscount']);
    $routes->get('', 'Roundtripdiscount::index/',['as' => 'index-roundtripdiscount']);
    $routes->get('(:segment)/edit', 'Roundtripdiscount::edit/$1',['as' => 'edit-roundtripdiscount']);
    $routes->post('', 'Roundtripdiscount::create',['as' => 'create-roundtripdiscount']);
    $routes->put('(:segment)', 'Roundtripdiscount::update/$1',['as' => 'update-roundtripdiscount']);
    $routes->delete('(:segment)', 'Roundtripdiscount::delete/$1',['as' => 'delete-roundtripdiscount']);
    
});


$routes->group('modules/backend/facilitys',["filter" => "cors","namespace" => "\Modules\Trip\Controllers"], function($routes)
{
    $routes->get('new', 'Facility::new',['as' => 'new-facility']);
    $routes->post('', 'Facility::create',['as' => 'create-facility']);
    $routes->get('', 'Facility::index',['as' => 'index-facility']);
    $routes->get('(:segment)/edit', 'Facility::edit/$1',['as' => 'edit-facility']);
    $routes->put('(:segment)', 'Facility::update/$1',['as' => 'update-facility']);
    $routes->delete('(:segment)', 'Facility::delete/$1',['as' => 'delete-facility']);
    
});


$routes->group('modules/api/v1/triplist',["filter" => "cors","namespace" => "\Modules\Trip\Controllers\Api"], function($routes)
{
    
    $routes->post('', 'Trip::getAllTrip',['as' => 'apigetall-trip']);
    $routes->get('show/v1/all', 'Trip::showsubtrip',['as' => 'apishowsubtrip-trip']);
    $routes->get('boardings/(:segment)', 'Trip::boarding/$1',['as' => 'boarding-trip']);
    $routes->get('droppings/(:segment)', 'Trip::dropping/$1',['as' => 'dropping-trip']);

});

$routes->group('modules/api/v1/facilities',["filter" => "cors","namespace" => "\Modules\Trip\Controllers\Api"], function($routes)
{
    $routes->get('', 'Facility::index',['as' => 'all-facility']);
});




