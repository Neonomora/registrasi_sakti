<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// Routes untuk Registrasi2
$routes->get('registrasi2', 'Registrasi2::index');
$routes->get('registrasi2/getKabupaten/(:segment)', 'Registrasi2::getKabupaten/$1');
$routes->get('registrasi2/getKecamatan/(:segment)', 'Registrasi2::getKecamatan/$1');
$routes->get('registrasi2/getDPD', 'Registrasi2::getDPD');
$routes->get('registrasi2/getDPC/(:segment)', 'Registrasi2::getDPC/$1');
$routes->post('registrasi2/simpan', 'Registrasi2::simpan');
$routes->get('registrasi2/sukses', 'Registrasi2::sukses');
