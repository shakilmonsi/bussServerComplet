<?php

$routes->group('modules/backend/languages', ["filter" => "cors", "namespace" => "\Modules\Localize\Controllers"], function ($routes) {
    $routes->get('new', 'Localize::new', ['as' => 'new-language']);
    $routes->post('', 'Localize::create', ['as' => 'create-language']);
    $routes->get('', 'Localize::index', ['as' => 'index-language']);
    $routes->get('(:segment)/edit', 'Localize::edit/$1', ['as' => 'edit-language']);
    $routes->put('(:segment)', 'Localize::update/$1', ['as' => 'update-language']);
    $routes->delete('(:segment)', 'Localize::delete/$1', ['as' => 'delete-language']);
});

$routes->group('modules/backend/localizestrings', ["filter" => "cors", "namespace" => "\Modules\Localize\Controllers"], function ($routes) {
    $routes->get('new', 'Langstring::new', ['as' => 'new-langstring']);
    $routes->post('', 'Langstring::create', ['as' => 'create-langstring']);

    $routes->get('bulk-upload', 'Langstring::bulkNew', ['as' => 'bulknew-langstring']);
    $routes->get('bulk-sample', 'Langstring::bulkDownloadSample', ['as' => 'bulksample-langstring']);
    $routes->post('bulk-upload', 'Langstring::bulkCreate', ['as' => 'bulkcreate-langstring']);

    $routes->get('(:segment)/edit', 'Langstring::edit/$1', ['as' => 'edit-langstring']);
    $routes->put('(:segment)', 'Langstring::update/$1', ['as' => 'update-langstring']);
    $routes->delete('(:segment)', 'Langstring::delete/$1', ['as' => 'delete-langstring']);
});

$routes->group('modules/backend/lanstrs/value', ["filter" => "cors", "namespace" => "\Modules\Localize\Controllers"], function ($routes) {
    $routes->post('', 'Lngstngvalue::update', ['as' => 'update-lngstngvalue']);
    $routes->get('lang/(:segment)', 'Lngstngvalue::index/$1', ['as' => 'index-lngstngvalue']);
});

$routes->group('modules/api/v1/localize', ["filter" => "cors", "namespace" => "\Modules\Localize\Controllers\Api"], function ($routes) {
    $routes->get('', 'Localize::index');
    $routes->get('strings', 'Localize::viewAllLocalize');
    $routes->get('strings/(:segment)', 'Localize::viewSingleLocalize/$1');
});
