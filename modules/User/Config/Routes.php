<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


$routes->group('modules/backend/profiles',["filter" => "cors","namespace" => "\Modules\User\Controllers"], function($routes)
{
    $routes->get('edit/profile', 'User::editprofile',['as' => 'editprofile-user']);
    $routes->put('change/login/info', 'User::changelogininfo',['as' => 'changelogininfo-user']);
    $routes->put('change/password', 'User::changepassword',['as' => 'changepassword-user']);
    $routes->put('change/profile/detail', 'User::changeprofileinfo',['as' => 'changeprofileinfo-user']);
    $routes->put('pic/update/(:segment)', 'User::ProfilePicUpload/$1',['as' => 'profilepicupload-user']);
    $routes->delete('(:segment)', 'User::delete/$1',['as' => 'delete-user']);
    
});






