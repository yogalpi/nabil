<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Mahasiswa::index');
$routes->get('/formMahasiswa', 'Mahasiswa::formMahasiswa');

$routes->post('/simpanMahasiswa', 'Mahasiswa::simpanMahasiswa');

