<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);

$routes->group('modules/backend/employees/type', ["filter" => "cors", "namespace" => "\Modules\Employee\Controllers"], function ($routes) {
    $routes->get('new', 'EmployeeType::new', ['as' => 'new-employeetype']);
    $routes->post('', 'EmployeeType::create', ['as' => 'create-employeetype']);
    $routes->get('', 'EmployeeType::index', ['as' => 'index-employeetype']);
    $routes->get('(:segment)/edit', 'EmployeeType::edit/$1', ['as' => 'edit-employeetype']);
    $routes->put('(:segment)', 'EmployeeType::update/$1', ['as' => 'update-employeetype']);
    $routes->delete('(:segment)', 'EmployeeType::delete/$1', ['as' => 'delete-employeetype']);
});

$routes->group('modules/backend/employees/bus', ["filter" => "cors", "namespace" => "\Modules\Employee\Controllers"], function ($routes) {
    $routes->get('new', 'Employee::new', ['as' => 'new-employee']);
    $routes->get('view/(:segment)', 'Employee::view/$1', ['as' => 'view-employee']);
    $routes->post('', 'Employee::create', ['as' => 'create-employee']);
    $routes->get('', 'Employee::index', ['as' => 'index-employee']);
    $routes->get('trash', 'Employee::index/1', ['as' => 'trash-index-employee']);
    $routes->get('restore/(:segment)', 'Employee::restore/$1', ['as' => 'restore-employee']);
    $routes->get('(:segment)/edit', 'Employee::edit/$1', ['as' => 'edit-employee']);
    $routes->get('(:segment)/edit/role', 'Employee::editRole/$1', ['as' => 'edit-employee-role']);
    $routes->put('(:segment)', 'Employee::update/$1', ['as' => 'update-employee']);
    $routes->put('(:segment)/role', 'Employee::updateRole/$1', ['as' => 'update-employee-role']);
    $routes->delete('(:segment)', 'Employee::delete/$1', ['as' => 'delete-employee']);
});
