<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);

$routes->group('modules/backend/blogs',["filter" => "cors","namespace" => "\Modules\Blog\Controllers"], function($routes)
{
    $routes->get('new', 'Blog::new',['as' => 'new-blog']);
    $routes->post('', 'Blog::create',['as' => 'create-blog']);
    $routes->get('', 'Blog::index',['as' => 'index-blog']);
    $routes->get('(:segment)/edit', 'Blog::edit/$1',['as' => 'edit-blog']);
    $routes->put('(:segment)', 'Blog::update/$1',['as' => 'update-blog']);
    $routes->delete('(:segment)', 'Blog::delete/$1',['as' => 'delete-blog']);
    
});

$routes->group('modules/api/v1/frontend',["filter" => "cors","namespace" => "\Modules\Blog\Controllers\Api"], function($routes)
{
    $routes->get('blogs', 'Blog::index',['filter' => 'cors']);
    $routes->get('blogs/(:num)', 'Blog::singleBlog/$1');
});



