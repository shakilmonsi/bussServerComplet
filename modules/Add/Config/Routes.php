<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/adds',["filter" => "cors","namespace" => "\Modules\Add\Controllers"], function($routes)
{
    $routes->get('new', 'Add::new',['as' => 'new-add']);
    $routes->post('', 'Add::create',['as' => 'create-add']);
    $routes->get('', 'Add::index',['as' => 'index-add']);
    $routes->get('(:segment)/edit', 'Add::edit/$1',['as' => 'edit-add']);
    $routes->put('(:segment)', 'Add::update/$1',['as' => 'update-add']);
    $routes->delete('(:segment)', 'Add::delete/$1',['as' => 'delete-add']);
    
});







$routes->group('modules/api/v1/adds',["filter" => "cors","namespace" => "\Modules\Add\Controllers\Api"], function($routes)
{
  $routes->get('', 'Add::index');
});






