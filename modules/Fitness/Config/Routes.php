<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/fitnesss', ["filter" => "cors", "namespace" => "\Modules\Fitness\Controllers"], function ($routes) {
    $routes->get('new', 'Fitness::new', ['as' => 'new-fitness']);
    $routes->post('', 'Fitness::create', ['as' => 'create-fitness']);
    $routes->get('', 'Fitness::index', ['as' => 'index-fitness']);
    $routes->get('(:segment)/edit', 'Fitness::edit/$1', ['as' => 'edit-fitness']);
    $routes->put('(:segment)', 'Fitness::update/$1', ['as' => 'update-fitness']);
    $routes->delete('(:segment)', 'Fitness::delete/$1', ['as' => 'delete-fitness']);
});
