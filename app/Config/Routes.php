<?php

namespace Config;

use App\Controllers\AuthController;

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
$routes->match(['get', 'post'], 'register', 'AuthController::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'AuthController::login', ["filter" => "noauth"]);
//admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
	$routes->get("/", "AdminController::index");
});
//user routes
$routes->group("user", ["filter" => "auth"], function ($routes) {
	$routes->get("/", "UserController::index");
});

$routes->get('logout', ' UserController::logout');

$routes->get('bookmark', "UserController::listBookmark");
$routes->get('tambah-bookmark', "ArtikelController::bookmark");
$routes->get('list-kuliner', "ArtikelController::listKuliner");
$routes->get('list-pariwisata', "ArtikelController::listPariwisata");
$routes->get('list-travel', "ArtikelController::listTravel");
$routes->get('list-oleh-oleh', "ArtikelController::listOleh");
$routes->get("artikel/(:num)", "ArtikelController::artikelById/$1");
$routes->get("bookmark/(:num)", "UserController::bookmarkById/$1");
$routes->match(["get", "post"], "add-artikel", "ArtikelController::addArtikel");
$routes->match(["get", "post"], "edit-artikel/(:num)", "ArtikelController::editArtikel/$1");
$routes->get("delete-artikel/(:num)", "ArtikelController::deleteArtikel/$1");
$routes->get("delete-bookmark/(:num)", "UserController::deleteBookmark/$1");
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
