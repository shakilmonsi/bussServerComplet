<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();





$routes->group('modules/backend/ratings',["filter" => "cors","namespace" => "\Modules\Rating\Controllers"], function($routes)
{
    
    $routes->get('', 'Rating::index',['as' => 'index-rating']);
    $routes->get('(:segment)/edit', 'Rating::edit/$1',['as' => 'edit-rating']);
    $routes->put('(:segment)', 'Rating::update/$1',['as' => 'update-rating']);
    $routes->delete('(:segment)', 'Rating::delete/$1',['as' => 'delete-rating']);
    
});







$routes->group('modules/api/v1/ratings',["filter" => "cors","namespace" => "\Modules\Rating\Controllers\Api"], function($routes)
{
    $routes->post('create', 'Rating::create',['as' => 'create-rating']);
    $routes->get('getall/review/(:segment)', 'Rating::getAllReview/$1',['as' => 'gatall-rating']);
  
});






