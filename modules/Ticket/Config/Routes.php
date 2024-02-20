<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// $routes->get("/blog/api/alls", "\Modules\Blog\Controllers\Api\Blog::index",['filter' => 'cors']);

$routes->group('modules/backend/tickets', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
    $routes->get('new', 'Ticket::new', ['as' => 'new-ticket']);
    $routes->get('singletrip/(:segment)/(:segment)', 'Ticket::getSingleTrip/$1/$2', ['as' => 'getSingleTrip-ticket']);
    $routes->post('seatlayout', 'Ticket::getSeatLayout', ['as' => 'getSeatLayout']);
    $routes->get('paid/booking/list', 'Ticket::allbookinglist', ['as' => 'allbookinglist-ticket']);
    $routes->post('', 'Ticket::create', ['as' => 'create-ticket']);
    $routes->post('roundtrip', 'Ticket::roundcreate', ['as' => 'roundcreate-ticket']);
    $routes->add('findtrip', 'Ticket::findtrip', ['as' => 'findtrip-ticket']);
    $routes->add('booking', 'Ticket::booking', ['as' => 'booking-ticket']);
    $routes->get('', 'Ticket::index', ['as' => 'index-ticket']);
    $routes->get('(:segment)/edit', 'Ticket::edit/$1', ['as' => 'edit-ticket']);
    $routes->put('(:segment)', 'Ticket::update/$1', ['as' => 'update-ticket']);
    $routes->delete('(:segment)', 'Ticket::delete/$1', ['as' => 'delete-ticket']);

    $routes->get('roundfindtrip', 'Ticket::roundfindtrip', ['as' => 'roundfindtrip-ticket']);

});

$routes->group('modules/backend/tickets/maxtimes', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
    $routes->get('new', 'Maxtime::new', ['as' => 'new-maxtime']);
    $routes->post('', 'Maxtime::create', ['as' => 'create-maxtime']);
    $routes->get('', 'Maxtime::index', ['as' => 'index-maxtime']);
    $routes->get('(:segment)/edit', 'Maxtime::edit/$1', ['as' => 'edit-maxtime']);
    $routes->put('(:segment)', 'Maxtime::update/$1', ['as' => 'update-maxtime']);
    $routes->delete('(:segment)', 'Maxtime::delete/$1', ['as' => 'delete-maxtime']);
});

$routes->group('modules/backend/tickets/partialpays', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
    $routes->get('new/(:segment)', 'Partialpaid::new/$1', ['as' => 'new-partialpaid']);
    $routes->post('', 'Partialpaid::create', ['as' => 'create-partialpaid']);
    $routes->get('', 'Partialpaid::index', ['as' => 'index-partialpaid']);
    $routes->get('(:segment)', 'Partialpaid::paymentdetail/$1', ['as' => 'detail-partialpaid']);
    $routes->get('(:segment)/edit', 'Partialpaid::edit/$1', ['as' => 'edit-partialpaid']);
    $routes->put('(:segment)', 'Partialpaid::update/$1', ['as' => 'update-partialpaid']);
    $routes->delete('(:segment)', 'Partialpaid::delete/$1', ['as' => 'delete-partialpaid']);

});

$routes->group('modules/backend/tickets/invoices', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
    $routes->get('show/(:segment)', 'Ticketinvoice::show/$1', ['as' => 'show-ticketinvoice']);
    $routes->get('print/(:segment)', 'Ticketinvoice::print/$1', ['as' => 'print-ticketinvoice']);
    $routes->get('posinvoice/(:segment)', 'Ticketinvoice::posinvoice/$1', ['as' => 'posinvoice-ticketinvoice']);
});


$routes->group('modules/backend/tickets/refunds', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
    $routes->get('new/(:segment)/(:segment)', 'Refund::new/$1/$2', ['as' => 'new-refund']);
    $routes->post('', 'Refund::create', ['as' => 'create-refund']);
    $routes->get('', 'Refund::indexTicket', ['as' => 'ticketindex-refund']);
});


$routes->group('modules/backend/tickets/cancels', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
    $routes->get('new/(:segment)/(:segment)', 'Cancel::new/$1/$2', ['as' => 'new-cancel']);
    $routes->post('', 'Cancel::create', ['as' => 'create-cancel']);
    $routes->get('', 'Cancel::indexTicket', ['as' => 'ticketindex-cancel']);
});


$routes->group('modules/backend/tickets/journeylists', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers"], function ($routes) {
   
    $routes->get('new', 'Journeylist::new', ['as' => 'journeylist-ticket']);
    $routes->post('tripfind', 'Journeylist::findtrip', ['as' => 'journeylist-findtrip-ticket']);
    $routes->get('joruneylist/data/(:segment)/(:segment)/(:segment)', 'Journeylist::getJourneylistData/$1/$2/$3', ['as' => 'getJourneylistData-ticket']);

});


$routes->group('modules/api/v1/tickets', ["filter" => "cors", "namespace" => "\Modules\Ticket\Controllers\Api"], function ($routes) {
    $routes->post('checkseats', 'TemporaryBook::checkSeats');
    $routes->post('booking', 'Ticket::bookticket');
    $routes->post('unpaid/booking', 'Ticket::laterBookticket');
    $routes->post('laterpay', 'Ticket::paylaterByUser');
    $routes->post('stripe-payment', 'Ticket::stripePayment');
    $routes->get('seat/(:segment)/(:segment)', 'Ticket::busSeat/$1/$2');
    $routes->get('bookingid/(:segment)', 'Ticket::singelBooking/$1');
});
