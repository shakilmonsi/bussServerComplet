<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);



$routes->group('modules/backend/coupons',["filter" => "cors","namespace" => "\Modules\Coupon\Controllers"], function($routes)
{
    $routes->get('new', 'Coupon::new',['as' => 'new-coupon']);
    $routes->post('', 'Coupon::create',['as' => 'create-coupon']);
    $routes->get('', 'Coupon::index',['as' => 'index-coupon']);
    $routes->get('(:segment)/edit', 'Coupon::edit/$1',['as' => 'edit-coupon']);
    $routes->put('(:segment)', 'Coupon::update/$1',['as' => 'update-coupon']);
    $routes->delete('(:segment)', 'Coupon::delete/$1',['as' => 'delete-coupon']);
    
});







$routes->group('modules/api/v1/coupons',["filter" => "cors","namespace" => "\Modules\Coupon\Controllers\Api"], function($routes)
{
  $routes->get('validation/(:segment)/(:segment)/(:segment)', 'Coupon::couponValidation/$1/$2/$3');
});






