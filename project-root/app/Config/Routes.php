<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/seferdetay', 'Seferdetay::index');
$routes->get('/seferler', 'Seferler::index');
$routes->get('/seferler2', 'Seferler2::index');
$routes->get('/odeme', 'Odeme::index');
$routes->get('/seferlistesi', 'Seferlistesi::index');
$routes->get('/dashboard', 'dashboard::index');
$routes->get('bilet', 'BiletController::index');
$routes->get('bilet/sorgula', 'BiletController::sorgula');