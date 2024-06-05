<?php

use CodeIgniter\Router\RouteCollection;

/**swaks
 * @var RouteCollection $routes
 */
// Home Mhsw
$routes->get('mhsw', 'Mhsw::index');
// Halaman Tambah
$routes->get('mhsw/tambah', 'Mhsw::tambah');
// Halaman Edit
$routes->get('mhsw/edit/(:any)', 'Mhsw::edit/$1');

// Proses CRUD
// Insert
$routes->post('mhsw/add', 'Mhsw::add');
// Update
$routes->post('mhsw/update', 'Mhsw::update');
// Hapus
$routes->get('mhsw/hapus/(:any)', 'Mhsw::hapus/$1');
