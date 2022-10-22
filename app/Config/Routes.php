<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home/index', 'Home::index');
$routes->get('/home/quiz', 'Home::quiz');
$routes->get('/home/instrument-detail', 'Home::instrument_detail');
$routes->get('/home/hasil-survei', 'Home::hasil_survei');
$routes->get('/home/riwayat-netizen', 'Home::riwayat_netizen');

$routes->get('/admin', 'Admin::dashboard_adm');
$routes->get('/admin/daftar-responden', 'Admin::daftar_responden');
$routes->get('/admin/daftar-responden-2', 'Admin::daftar_responden_2');
$routes->get('/admin/detail-responden', 'Admin::detail_responden');
$routes->get('/admin/data-instrumen', 'Admin::data_instrumen');
$routes->get('/admin/detail-instrumen', 'Admin::detail_instrumen');
$routes->get('/admin/data-pertanyaan', 'Admin::data_pertanyaan');
$routes->get('/admin/form-tambah-instrumen', 'Admin::tambah_instrumen');
$routes->get('/admin/manajemen-user', 'Admin::manajemen_user');

$routes->get('/peneliti', 'Peneliti::dashboard_peneliti');
$routes->get('/peneliti/pilih-instrumen', 'Peneliti::pilih_instrumen');
$routes->get('/peneliti/detail-instrumen', 'Peneliti::detail_instrumen');

$routes->post('/dinamis/form-answer-option', 'Dinamis::form_answer_option');
$routes->post('/dinamis/tabel-pertanyaan-bahasa', 'Dinamis::tabel_pertanyaan_bahasa');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
