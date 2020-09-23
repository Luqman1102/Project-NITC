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
$routes->set404Override(function(){return view('404');});
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/tentang-kami', 'TentangKami::index');
$routes->get('/kategori/(:segment)', 'Kategori::layanan/$1');

$routes->group('', ['filter' => 'belumLogin'], function ($routes) {
	$routes->get('/logout', 'auth/Login::logout');
	$routes->get('/profile', 'User::profile');
	$routes->post('/profile', 'User::edit_profile');
});

$routes->group('', ['filter' => 'sudahLogin'], function ($routes) {
	$routes->get('/register-pembeli', 'auth/Register::index_pembeli');
	$routes->post('/register-pembeli', 'auth/Register::register_pembeli');
	$routes->get('/register-penjual', 'auth/Register::index_penjual');
	$routes->post('/register-penjual', 'auth/Register::register_penjual');
	$routes->get('/login', 'auth/Login::index');
	$routes->post('/login', 'auth/Login::Login');
});



/**
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
