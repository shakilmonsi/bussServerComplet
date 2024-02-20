<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/taxs',["filter" => "cors","namespace" => "\Modules\Tax\Controllers"], function($routes)
{
    $routes->get('new', 'Tax::new',['as' => 'new-tax']);
    $routes->post('', 'Tax::create',['as' => 'create-tax']);
    $routes->get('', 'Tax::index',['as' => 'index-tax']);
    $routes->get('(:segment)/edit', 'Tax::edit/$1',['as' => 'edit-tax']);
    $routes->put('(:segment)', 'Tax::update/$1',['as' => 'update-tax']);
    $routes->delete('(:segment)', 'Tax::delete/$1',['as' => 'delete-tax']);
    
});







$routes->group('modules/api/v1/taxs',["filter" => "cors","namespace" => "\Modules\Tax\Controllers\Api"], function($routes)
{

  $routes->get('', 'Tax::index');
  
});






