<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/locations',["filter" => "cors","namespace" => "\Modules\Location\Controllers"], function($routes)
{
    $routes->get('new', 'Location::new',['as' => 'new-location']);
    $routes->post('', 'Location::create',['as' => 'create-location']);
    $routes->get('', 'Location::index',['as' => 'index-location']);
    $routes->get('(:segment)/edit', 'Location::edit/$1',['as' => 'edit-location']);
    $routes->put('(:segment)', 'Location::update/$1',['as' => 'update-location']);
    $routes->delete('(:segment)', 'Location::delete/$1',['as' => 'delete-location']);
    
});


$routes->group('modules/backend/stands',["filter" => "cors","namespace" => "\Modules\Location\Controllers"], function($routes)
{
    $routes->get('new', 'Stand::new',['as' => 'new-stand']);
    $routes->post('', 'Stand::create',['as' => 'create-stand']);
    $routes->get('', 'Stand::index',['as' => 'index-stand']);
    $routes->get('(:segment)/edit', 'Stand::edit/$1',['as' => 'edit-stand']);
    $routes->put('(:segment)', 'Stand::update/$1',['as' => 'update-stand']);
    $routes->delete('(:segment)', 'Stand::delete/$1',['as' => 'delete-stand']);
    
});




$routes->group('modules/api/v1/locations',["filter" => "cors","namespace" => "\Modules\Location\Controllers\Api"], function($routes)
{
  $routes->get('', 'Location::index');
});

$routes->group('modules/api/v1/stands',["filter" => "cors","namespace" => "\Modules\Location\Controllers\Api"], function($routes)
{
  $routes->get('', 'Stand::index');
});




