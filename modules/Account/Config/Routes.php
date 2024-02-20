<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);

$routes->group('modules/backend/accounts', ["filter" => "cors", "namespace" => "\Modules\Account\Controllers"], function ($routes) {
    $routes->get('new', 'Account::new', ['as' => 'new-account']);
    $routes->post('', 'Account::create', ['as' => 'create-account']);
    $routes->get('', 'Account::index', ['as' => 'index-account']);
    $routes->get('(:segment)', 'Account::show/$1', ['as' => 'show-account']);
    $routes->get('(:segment)/edit', 'Account::edit/$1', ['as' => 'edit-account']);
    $routes->put('(:segment)', 'Account::update/$1', ['as' => 'update-account']);
    $routes->delete('(:segment)', 'Account::delete/$1', ['as' => 'delete-account']);
    $routes->post('transaction', 'Account::transaction', ['as' => 'transaction-range']);
});

$routes->group('modules/backend/accountheads', ["filter" => "cors", "namespace" => "\Modules\Account\Controllers"], function ($routes) {
    $routes->get('new', 'Accounthead::new', ['as' => 'new-accounthead']);
    $routes->post('', 'Accounthead::create', ['as' => 'create-accounthead']);
    $routes->get('', 'Accounthead::index', ['as' => 'index-accounthead']);
    $routes->get('(:segment)/edit', 'Accounthead::edit/$1', ['as' => 'edit-accounthead']);
    $routes->put('(:segment)', 'Accounthead::update/$1', ['as' => 'update-accounthead']);
    $routes->delete('(:segment)', 'Accounthead::delete/$1', ['as' => 'delete-accounthead']);
});

$routes->group('modules/backend/payagents', ["filter" => "cors", "namespace" => "\Modules\Account\Controllers"], function ($routes) {
    $routes->get('new', 'Payagent::new', ['as' => 'new-payagent']);
    $routes->post('', 'Payagent::create', ['as' => 'create-payagent']);
    $routes->get('', 'Payagent::index', ['as' => 'index-payagent']);
    $routes->get('(:segment)', 'Payagent::show/$1', ['as' => 'show-Payagent']);
    $routes->get('(:segment)/edit', 'Payagent::edit/$1', ['as' => 'edit-payagent']);
    $routes->put('(:segment)', 'Payagent::update/$1', ['as' => 'update-payagent']);
    $routes->delete('(:segment)', 'Payagent::delete/$1', ['as' => 'delete-payagent']);
    $routes->get('status/(:segment)/(:segment)', 'Payagent::status/$1/$2', ['as' => 'status-payagent']);
    $routes->post('agent/pay/range', 'Payagent::range', ['as' => 'date-range']);

    $routes->get('single/agent/detail/(:segment)', 'Payagent::show/$1', ['as' => 'show-payagent']);
    
    $routes->post('single/agent/pay/range', 'Payagent::singleagentrange', ['as' => 'date-singleagentrange']);
});

$routes->group('modules/api/v1/accounts', ["filter" => "cors", "namespace" => "\Modules\Tax\Controllers\Api"], function ($routes) {
    $routes->get('', 'Account::index');
});
