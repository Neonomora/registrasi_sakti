<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route default ke halaman login
$routes->get('/', 'Auth::index');

// Proses login
$routes->post('login', 'Auth::login');

// Logout
$routes->get('logout', 'Auth::logout');

// Dashboard setelah login
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/getByNik/(:num)', 'Dashboard::getByNik/$1');
$routes->post('dashboard/update', 'Dashboard::update');

$routes->get('registrasi/getKelasByProdi/(:any)', 'Registrasi::getKelasByProdi/$1');
// Tambahkan juga untuk simpan
$routes->post('registrasi/simpan', 'Registrasi::simpan');
