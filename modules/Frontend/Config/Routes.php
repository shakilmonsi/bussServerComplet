<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);

$routes->group('modules/backend/frontends',["filter" => "cors","namespace" => "\Modules\Frontend\Controllers"], function($routes)
{
    $routes->get('section/one', 'Front::editSecOne',['as' => 'edit-section-one']);
    $routes->post('create/section/one', 'Front::createSecOne',['as' => 'create-section-one']);

    $routes->get('section/two', 'Front::editSecTwo',['as' => 'edit-section-two']);
    $routes->post('create/section/two', 'Front::createSecTwo',['as' => 'create-section-two']);

    $routes->get('section/two/deail/new', 'Front::editSecTwodetailnew',['as' => 'new-section-two-deatil']);
    $routes->get('section/two/deails', 'Front::editSecTwoDetailIndex',['as' => 'index-section-two-deatil']);
    $routes->post('section/two/deails', 'Front::editSecTwoDetailCreate',['as' => 'create-section-two-deatil']);
    $routes->put('section/two/deails/(:segment)', 'Front::editSecTwoDetailUpdate/$1',['as' => 'update-section-two-deatil']);
    $routes->get('section/two/deails/(:segment)/edit', 'Front::editSecTwoDetailEdit/$1',['as' => 'edit-section-two-deatil']);


    $routes->get('section/three', 'Front::editSecThree',['as' => 'edit-section-three']);
    $routes->post('create/section/three', 'Front::createSecThree',['as' => 'create-section-three']);


    $routes->get('section/four', 'Front::editsecFour',['as' => 'edit-section-four']);
    $routes->post('create/section/four', 'Front::createSecFour',['as' => 'create-section-four']);


    $routes->get('section/four/comments/new', 'Front::editSecFourCommentnew',['as' => 'new-section-four-comment']);
    $routes->get('section/four/comments', 'Front::editSecFourCommentIndex',['as' => 'index-section-four-comment']);
    $routes->post('section/four/comments', 'Front::editSecFourCommentCreate',['as' => 'create-section-four-comment']);
    $routes->put('section/four/comments/(:segment)', 'Front::editSecFourCommentUpdate/$1',['as' => 'update-section-four-comment']);
    $routes->get('section/four/comments/(:segment)/edit', 'Front::editSecFourCommentEdit/$1',['as' => 'edit-section-four-comment']);



    $routes->get('section/five', 'Front::editSecFive',['as' => 'edit-section-five']);
    $routes->post('create/section/five', 'Front::createSecFive',['as' => 'create-section-five']);



    $routes->get('section/six', 'Front::editSecSix',['as' => 'edit-section-six']);
    $routes->post('create/section/six', 'Front::createSecSix',['as' => 'create-section-six']);


    $routes->get('section/seven', 'Front::editSecSeven',['as' => 'edit-section-seven']);
    $routes->post('create/section/seven', 'Front::createSecSeven',['as' => 'create-section-seven']);
    
   

    $routes->delete('section/two/deails/remove/(:segment)', 'Front::editSecTwoDetailDelete/$1',['as' => 'delete-section-two-deatil']);
    $routes->delete('section/four/comments/remove/(:segment)', 'Front::editSecFourCommentDelete/$1',['as' => 'delete-section-four-comment']);
});

$routes->group('modules/api/v1/frontend',["filter" => "cors","namespace" => "\Modules\Frontend\Controllers\Api"], function($routes)
{
    $routes->get('hero', 'Front::secOne');
    $routes->get('work', 'Front::secTwo');
    
    $routes->get('work/articles', 'Front::secTwoArticleAll');
    $routes->get('work/articles/(:num)', 'Front::secTwoArticleSingle/$1');

    $routes->get('journey', 'Front::secThree');
    $routes->get('journey/trips', 'Front::secThreeAllTrip');
    $routes->get('journey/trips/(:num)', 'Front::secThreeSingleTrip/$1');

    $routes->get('testiimonial', 'Front::secFour');
    $routes->get('comments', 'Front::secFourAll');
    $routes->get('comments/(:num)', 'Front::secFourSingle/$1');

    $routes->get('app', 'Front::secFive');
    $routes->get('cms', 'Front::secSix');
    $routes->get('subscribe', 'Front::secSeven');
});



