<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('about', 'AboutController::index');

$routes->get('service', 'ServiceController::index');
$routes->post('service/submit', 'ServiceController::submit');

$routes->get('price', 'PriceController::index');
$routes->get('price/form/(:segment)', 'PriceController::form/$1');
$routes->post('price/save', 'PriceController::save');

$routes->get('admin/dashboard', 'DashboardController::index', ['filter' => 'adminfilter']);

$routes->get('pesan', 'PesanController::index', ['filter' => 'adminfilter']);
$routes->get('admin/pesan', 'PesanController::index');
$routes->get('admin/pesan/delete/(:num)', 'PesanController::delete/$1');

$routes->get('admin/order', 'AdminOrderController::index', ['filter' => 'adminfilter']);
$routes->get('admin/order/delete/(:num)', 'AdminOrderController::delete/$1');

$routes->get('admin/quote', 'AdminQuoteController::index');
$routes->post('admin/quote/delete/(:num)', 'AdminQuoteController::delete/$1');

$routes->get('contact', 'ContactController::index');
$routes->post('contact/simpan', 'ContactController::simpan');

$routes->get('privacy-policy', 'PrivacyController::index');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');