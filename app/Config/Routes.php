<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Tabel::view');
$routes->get('/detail/(:num)', 'Tabel::detail/$1');
$routes->get('/tambah', 'Tabel::tambah');
$routes->post('/add', 'Tabel::add');
$routes->post('/update', 'Tabel::update');
$routes->get('/edit/(:any)', 'Tabel::edit/$1');
$routes->get('/hapus/(:any)', 'Tabel::hapus/$1');

