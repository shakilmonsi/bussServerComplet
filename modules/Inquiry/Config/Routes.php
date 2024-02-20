<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


$routes->group('modules/backend/inquiries',["filter" => "cors","namespace" => "\Modules\Inquiry\Controllers"], function($routes)
{
   
    $routes->get('', 'Inquiry::index',['as' => 'index-inquiry']);
    $routes->get('show/(:segment)', 'Inquiry::show/$1',['as' => 'show-inquiry']);
    $routes->delete('(:segment)', 'Inquiry::delete/$1',['as' => 'delete-inquiry']);
    
});







$routes->group('modules/api/v1/inquiries',["filter" => "cors","namespace" => "\Modules\Inquiry\Controllers\Api"], function($routes)
{
  $routes->post('create', 'Inquiry::create',['as' => 'create-inquiry']);

});






