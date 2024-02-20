<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/roles',["filter" => "cors","namespace" => "\Modules\Role\Controllers"], function($routes)
{
    $routes->get('new', 'Role::new',['as' => 'new-role']);
    $routes->post('', 'Role::create',['as' => 'create-role']);
    $routes->get('', 'Role::index',['as' => 'index-role']);
    $routes->get('(:segment)/edit', 'Role::edit/$1',['as' => 'edit-role']);
    $routes->put('(:segment)', 'Role::update/$1',['as' => 'update-role']);
    $routes->delete('(:segment)', 'Role::delete/$1',['as' => 'delete-role']);
    
});


$routes->group('modules/backend/menus',["filter" => "cors","namespace" => "\Modules\Role\Controllers"], function($routes)
{
    $routes->get('new', 'Menu::new',['as' => 'new-menu']);
    $routes->post('', 'Menu::create',['as' => 'create-menu']);
    $routes->get('', 'Menu::index',['as' => 'index-menu']);
    $routes->get('(:segment)/edit', 'Menu::edit/$1',['as' => 'edit-menu']);
    $routes->put('(:segment)', 'Menu::update/$1',['as' => 'update-menu']);
    $routes->delete('(:segment)', 'Menu::delete/$1',['as' => 'delete-menu']);
    
});



$routes->group('modules/backend/permissions',["filter" => "cors","namespace" => "\Modules\Role\Controllers"], function($routes)
{
    $routes->get('new', 'Permission::new',['as' => 'new-permission']);
    $routes->post('', 'Permission::create',['as' => 'create-permission']);
    $routes->get('', 'Permission::index',['as' => 'index-permission']);
    $routes->get('(:segment)/edit', 'Permission::edit/$1',['as' => 'edit-permission']);
    $routes->put('(:segment)', 'Permission::update/$1',['as' => 'update-permission']);
    $routes->delete('(:segment)', 'Permission::delete/$1',['as' => 'delete-permission']);
    
});







$routes->group('modules/api/v1/roles',["filter" => "cors","namespace" => "\Modules\Role\Controllers\Api"], function($routes)
{
  $routes->get('', 'Role::index');
});






