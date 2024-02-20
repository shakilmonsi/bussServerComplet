<?php

$routes->group('modules/backend/fleets', ["filter" => "cors", "namespace" => "\Modules\Fleet\Controllers"], function ($routes) {
    $routes->get('new', 'Fleet::new', ['as' => 'new-fleet']);
    $routes->post('', 'Fleet::create', ['as' => 'create-fleet']);
    $routes->get('', 'Fleet::index', ['as' => 'index-fleet']);
    $routes->get('(:segment)/edit', 'Fleet::edit/$1', ['as' => 'edit-fleet']);
    $routes->put('(:segment)', 'Fleet::update/$1', ['as' => 'update-fleet']);
    $routes->get('check-delete/(:segment)', 'Fleet::deleteConfirmation/$1', ['as' => 'delete-fleet-confirmation']);
    $routes->delete('(:segment)', 'Fleet::delete/$1', ['as' => 'delete-fleet']);
});

$routes->group('modules/backend/vehicles', ["filter" => "cors", "namespace" => "\Modules\Fleet\Controllers"], function ($routes) {
    $routes->get('new', 'Vehicle::new', ['as' => 'new-vehicle']);
    $routes->post('', 'Vehicle::create', ['as' => 'create-vehicle']);
    $routes->get('', 'Vehicle::index', ['as' => 'index-vehicle']);
    $routes->get('(:segment)/edit', 'Vehicle::edit/$1', ['as' => 'edit-vehicle']);
    $routes->put('(:segment)', 'Vehicle::update/$1', ['as' => 'update-vehicle']);
    $routes->delete('(:segment)', 'Vehicle::delete/$1', ['as' => 'delete-vehicle']);
    $routes->get('trash', 'Vehicle::index/1', ['as' => 'trash-index-vehicle']);
    $routes->get('restore/(:segment)', 'Vehicle::restore/$1', ['as' => 'restore-vehicle']);
});

$routes->group('modules/api/v1/frontend/fleets', ["filter" => "cors", "namespace" => "\Modules\Fleet\Controllers\Api"], function ($routes) {
    $routes->get('', 'Fleet::index', ['as' => 'all-fleet']);
});

$routes->group('modules/api/v1/vehicles', ["filter" => "cors", "namespace" => "\Modules\Fleet\Controllers\Api"], function ($routes) {
    $routes->get('', 'Vehicle::index', ['as' => 'all-vehicles']);
    $routes->get('(:segment)', 'Vehicle::singleVehicle/$1', ['as' => 'single-vehicles']);
});
