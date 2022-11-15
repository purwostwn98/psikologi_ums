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
$routes->get('{locale}/', 'Home::index');
$routes->get('{locale}/home/quiz', 'Home::quiz');
$routes->get('{locale}/home/instrument-detail', 'Home::instrument_detail');
$routes->get('{locale}/home/hasil-survei', 'Home::hasil_survei');
$routes->get('{locale}/home/riwayat-netizen', 'Home::riwayat_netizen');
$routes->post('/home/simpan-survei', 'Home::simpan_survei');


// admin
$routes->get('/admin', 'Admin::dashboard_adm');
$routes->get('/admin/daftar-responden', 'Admin::daftar_responden');
$routes->get('/admin/daftar-responden-2', 'Admin::daftar_responden_2');
$routes->get('/admin/detail-responden', 'Admin::detail_responden');
$routes->get('/admin/data-instrumen', 'Admin::data_instrumen');

$routes->post('/admin/delete-pertanyaan', 'Admin::detele_pertanyaan');
$routes->post('/admin/edit-pertanyaan', 'Admin::edit_pertanyaan');
$routes->match(['post', 'get'], '/admin/detail-instrumen', 'Admin::detail_instrumen');
$routes->match(['post', 'get'], '/admin/data-pertanyaan', 'Admin::data_pertanyaan');
$routes->match(['post', 'get'], '/admin/form-tambah-instrumen', 'Admin::tambah_instrumen');

$routes->match(['post', 'get'], '/admin/manajemen-user', 'Admin::manajemen_user');
$routes->get('/translate-me', 'Admin::translate_me');
// admin


// peneliti
$routes->match(['post', 'get'], '/peneliti', 'Peneliti::dashboard_peneliti');
$routes->get('/peneliti/pilih-instrumen', 'Peneliti::pilih_instrumen');
$routes->get('/peneliti/daftar-responden-survei', 'Peneliti::daftar_responden_survei');
$routes->get('/peneliti/detail-responden-survei', 'Peneliti::detail_responden_survei');
$routes->match(['post', 'get'], '/peneliti/detail-instrumen', 'Peneliti::detail_instrumen');
// end peneliti

$routes->get('{locale}/auth/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->post('/auth/cek_user', 'Auth::cek_user');
$routes->get('/auth/login-cas', 'Auth::login_cas');

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
