<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');          // Halaman utama
$routes->get('/pegawai', 'Pegawai::index'); // Controller khusus pegawai
$routes->get('/laporan/kriteria', 'Laporan::daftarKriteria');
$routes->get('/laporan/pegawai', 'Laporan::daftarPegawai');
$routes->get('/laporan/bobot-normalisasi', 'Laporan::bobotNormalisasi');
$routes->get('/laporan/vektor-s', 'Laporan::vektorS');
$routes->get('/laporan/nilai-v', 'Laporan::nilaiV');
$routes->get('/laporan/ranking', 'Laporan::rankingPegawai');

// Data Kriteria
$routes->get('/data-kriteria', 'DataKriteria::index');
$routes->get('/data-kriteria/create', 'DataKriteria::create');
$routes->post('/data-kriteria/store', 'DataKriteria::store');
$routes->get('/data-kriteria/edit/(:num)', 'DataKriteria::edit/$1');
$routes->post('/data-kriteria/update/(:num)', 'DataKriteria::update/$1');
$routes->get('/data-kriteria/delete/(:num)', 'DataKriteria::delete/$1');

// Pegawai
$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/pegawai/create', 'Pegawai::create');
$routes->post('/pegawai/store', 'Pegawai::store');
$routes->get('/pegawai/edit/(:num)', 'Pegawai::edit/$1');
$routes->post('/pegawai/update/(:num)', 'Pegawai::update/$1');
$routes->get('/pegawai/delete/(:num)', 'Pegawai::delete/$1');

// Konversi Penilaian
$routes->get('/konversi-penilaian', 'KonversiPenilaian::index');
$routes->get('/konversi-penilaian/create', 'KonversiPenilaian::create');
$routes->post('/konversi-penilaian/store', 'KonversiPenilaian::store');
$routes->get('/konversi-penilaian/edit/(:num)', 'KonversiPenilaian::edit/$1');
$routes->post('/konversi-penilaian/update/(:num)', 'KonversiPenilaian::update/$1');
$routes->get('/konversi-penilaian/delete/(:num)', 'KonversiPenilaian::delete/$1');
