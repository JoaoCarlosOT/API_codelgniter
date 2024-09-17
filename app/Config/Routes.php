<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'ProdutoController::index');
$routes->get('/produtos/(:num)', 'ProdutoController::show/$1');
$routes->post('/produtos', 'ProdutoController::create');
$routes->put('/produtos/(:num)', 'ProdutoController::update/$1');
$routes->delete('/produtos/(:num)', 'ProdutoController::delete/$1');
