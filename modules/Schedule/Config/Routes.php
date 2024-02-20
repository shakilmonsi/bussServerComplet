<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/schedules',["filter" => "cors","namespace" => "\Modules\Schedule\Controllers"], function($routes)
{
    $routes->get('new', 'Schedule::new',['as' => 'new-schedule']);
    $routes->post('', 'Schedule::create',['as' => 'create-schedule']);
    $routes->get('', 'Schedule::index',['as' => 'index-schedule']);
    $routes->get('(:segment)/edit', 'Schedule::edit/$1',['as' => 'edit-schedule']);
    $routes->put('(:segment)', 'Schedule::update/$1',['as' => 'update-schedule']);
    $routes->delete('(:segment)', 'Schedule::delete/$1',['as' => 'delete-schedule']);
    
});


$routes->group('modules/backend/filters/schedule',["filter" => "cors","namespace" => "\Modules\Schedule\Controllers"], function($routes)
{
    $routes->get('new', 'Schedulefilter::new',['as' => 'new-schedulefilter']);
    $routes->post('', 'Schedulefilter::create',['as' => 'create-schedulefilter']);
    $routes->get('', 'Schedulefilter::index',['as' => 'index-schedulefilter']);
    $routes->get('(:segment)/edit', 'Schedulefilter::edit/$1',['as' => 'edit-schedulefilter']);
    $routes->put('(:segment)', 'Schedulefilter::update/$1',['as' => 'update-schedulefilter']);
    $routes->delete('(:segment)', 'Schedulefilter::delete/$1',['as' => 'delete-schedulefilter']);
    
});


$routes->group('modules/api/v1/filters',["filter" => "cors","namespace" => "\Modules\Schedule\Controllers\Api"], function($routes)
{
  $routes->get('', 'Schedulefilter::index');
  $routes->get('arrivals', 'Schedulefilter::arrival');
  $routes->get('departures', 'Schedulefilter::departure');
});

$routes->group('modules/api/v1/schedules',["filter" => "cors","namespace" => "\Modules\Schedule\Controllers\Api"], function($routes)
{
  $routes->get('', 'Schedule::index');
 
});





