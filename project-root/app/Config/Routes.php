<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/seferdetay', 'Seferdetay::index');
$routes->get('/seferler', 'Seferler::index');