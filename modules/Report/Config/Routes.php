<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();





$routes->group('modules/backend/reports',["filter" => "cors","namespace" => "\Modules\Report\Controllers"], function($routes)
{
    $routes->get('ticket/sell/load', 'Report::ticketSaleLoad',['as' => 'loadtickesell-report']);
    $routes->post('ticket/sell/data', 'Report::ticketSaleData',['as' => 'datatickesell-report']);

    $routes->get('agent/commission/load', 'Report::agentCommissionLoad',['as' => 'loadcommission-report']);
    $routes->post('agent/commission/data', 'Report::agentCommissionDetails',['as' => 'commissiondata-report']);


    $routes->get('agent/sum/report/load', 'Report::agentSumReportLoad',['as' => 'loadsum-report']);
    $routes->post('agent/sum/report/data', 'Report::agentSumReportDetails',['as' => 'sumedata-report']);

  
    
});









