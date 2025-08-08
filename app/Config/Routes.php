<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('permohonan/pemohon', 'Permohonan::pemohon');
$routes->get('pemohon', 'Permohonan::pemohon');
$routes->get('pemohon/tambah', 'Permohonan::tambah');
$routes->post('pemohon/save', 'Permohonan::save');
$routes->get('pemohon/edit/(:num)', 'Permohonan::edit/$1');
$routes->post('pemohon/update/(:num)', 'Permohonan::update/$1');
$routes->get('pemohon/delete/(:num)', 'Permohonan::delete/$1');

// Auth Routes
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::doLogin');
$routes->get('logout', 'Auth::logout');
