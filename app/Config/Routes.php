<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Catalog::index');
$routes->get('/book/(:num)', 'Catalog::view/$1');
$routes->get('viewer/(:num)', 'Catalog::viewer/$1');
