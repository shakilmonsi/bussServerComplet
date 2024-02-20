<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);

$routes->group('modules/backend/pages',["filter" => "cors","namespace" => "\Modules\Page\Controllers"], function($routes)
{
    $routes->get('about', 'Page::about',['as' => 'new-about']);
    $routes->post('about/create', 'Page::createAbout',['as' => 'create-about']);
    $routes->put('about/(:segment)', 'Page::updateAbout/$1',['as' => 'update-about']);

    $routes->get('cooke', 'Page::cooke',['as' => 'new-cooke']);
    $routes->post('cooke/create', 'Page::createCooke',['as' => 'create-cooke']);
    $routes->put('cooke/(:segment)', 'Page::updateCooke/$1',['as' => 'update-cooke']);

    $routes->get('privacy', 'Page::privacy',['as' => 'new-privacy']);
    $routes->post('privacy/create', 'Page::createPrivacy',['as' => 'create-privacy']);
    $routes->put('privacy/(:segment)', 'Page::updatePrivacy/$1',['as' => 'update-privacy']);

    $routes->get('terms', 'Page::term',['as' => 'new-term']);
    $routes->post('terms/create', 'Page::createTerm',['as' => 'create-term']);
    $routes->put('terms/(:segment)', 'Page::updateTerm/$1',['as' => 'update-term']);


    $routes->get('faq', 'Page::faq',['as' => 'new-faq']);
    $routes->post('faq/create', 'Page::createFaq',['as' => 'create-faq']);
    $routes->put('faq/(:segment)', 'Page::updateFaq/$1',['as' => 'update-faq']);

    $routes->get('new', 'Page::new',['as' => 'new-question']);
    $routes->post('', 'Page::create',['as' => 'create-question']);
    $routes->get('', 'Page::index',['as' => 'index-question']);
    $routes->get('(:segment)/edit', 'Page::edit/$1',['as' => 'edit-question']);
    $routes->put('(:segment)', 'Page::update/$1',['as' => 'update-question']);
    $routes->delete('(:segment)', 'Page::delete/$1',['as' => 'delete-question']);
    
});

$routes->group('modules/api/v1/pages',["filter" => "cors","namespace" => "\Modules\Page\Controllers\Api"], function($routes)
{
    $routes->get('aboutpage', 'Page::aboutPage',['filter' => 'cors']);
    $routes->get('cookepage', 'Page::cookePage',['filter' => 'cors']);
    $routes->get('privacypage', 'Page::privacyPage',['filter' => 'cors']);
    $routes->get('termspage', 'Page::termsPage',['filter' => 'cors']);
    $routes->get('faqpage', 'Page::faqPage',['filter' => 'cors']);
    $routes->get('question', 'Page::question',['filter' => 'cors']);
    
});



