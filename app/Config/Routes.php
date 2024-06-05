<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('halo', 'Halo::index');
$routes->get('mahasiswa', 'Mahasiswa::index'); 
$routes->get('mahasiswa/tambah', 'Mahasiswa::tambah');
// Halaman Edit
$routes->get('mahasiswa/edit/(:any)', 'Mahasiswa::edit/$1');
// Proses CRUD
// Insert
$routes->post('mahasiswa/add', 'Mahasiswa::add');
// Update
$routes->post('mahasiswa/update', 'Mahasiswa::update');
// Hapus
$routes->get('mahasiswa/hapus/(:any)', 'Mahasiswa::hapus/$1');