<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultcontroller('home');
$routes->get('/', 'Home::index');



        // Route untuk menampilkan daftar anggota
        $routes->get('/anggota', 'Anggota::index');

        // Route untuk menampilkan form tambah anggota
        $routes->get('/anggota/tambah', 'Anggota::tambah');

        // Route untuk menyimpan data anggota baru
        $routes->post('/anggota/simpan', 'Anggota::simpan');

        // Route untuk menampilkan form edit anggota
        $routes->get('/anggota/edit/(:num)', 'Anggota::edit/$1');
        $routes->post('/anggota/update/(:num)', 'Anggota::update/$1');

        // Route untuk menghapus data anggota
        $routes->get('/anggota/hapus/(:num)', 'Anggota::hapus/$1');
        
        $routes->get('/dosen', 'Dosen::index');
        $routes->get('/dosen/create', 'Dosen::create');
        $routes->post('/dosen/store', 'Dosen::store');
        $routes->get('/dosen/edit/(:num)', 'Dosen::edit/$1');
        $routes->put('/dosen/update/(:num)', 'Dosen::update/$1');
        $routes->get('/dosen/delete/(:num)', 'Dosen::destroy/$1');

        $routes->get('/admin', 'admin::index');
        $routes->get('/admin/create', 'admin::create');
        $routes->post('/admin/store', 'admin::store');
        $routes->get('/admin/edit/(:num)', 'admin::edit/$1');
        $routes->put('/admin/update/(:num)', 'admin::update/$1');
        $routes->get('/admin/delete/(:num)', 'admin::destroy/$1');



        


