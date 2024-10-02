<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/materi', 'Home::materi');
$routes->get('/latihan', 'Home::latihan');
$routes->get('/quiz', 'Soal::latihan9');
$routes->get('/soalan1', 'Soal::latihan1');
$routes->get('/soalan2', 'Soal::latihan2');
$routes->get('/soalan3', 'Soal::latihan3');
$routes->get('/soalan4', 'Soal::latihan4');
$routes->get('/soalan5', 'Soal::latihan5');
$routes->get('/soalan6', 'Soal::latihan6');
$routes->get('/soalan7', 'Soal::latihan7');
$routes->get('/soalan8', 'Soal::latihan8');
$routes->get('/soalan9', 'Soal::latihan9');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
