<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('register', 'Auth::registrationForm', ['as' => 'registrationForm']);
$routes->post('register', 'Auth::registerUser', ['as' => 'registerUser']);
$routes->get('login', 'Auth::loginForm', ['as' => 'loginForm']);
$routes->post('login', 'Auth::loginUser', ['as' => 'loginUser']);
$routes->post('logout', 'Auth::logoutUser', ['as' => 'logoutUser']);
$routes->get('dashboard', 'Home::dashboard', ['as' => 'dashboard']);

/*
$routes->get('products', 'Product::feature');
$routes->post('products', 'Product::feature');
$routes->put('products/(:num)', 'Product::feature');
$routes->delete('products/(:num)', 'Product::feature');
$routes->match(['get', 'put'], 'products', 'Product::feature');

$routes->resource('photos');

// Equivalent to the following:
$routes->get('photos/new',             'Photos::new');
$routes->post('photos',                'Photos::create');
$routes->get('photos',                 'Photos::index');
$routes->get('photos/(:segment)',      'Photos::show/$1');
$routes->get('photos/(:segment)/edit', 'Photos::edit/$1');
$routes->put('photos/(:segment)',      'Photos::update/$1');
$routes->patch('photos/(:segment)',    'Photos::update/$1');
$routes->delete('photos/(:segment)',   'Photos::delete/$1');

$routes->resource('photos', ['websafe' => 1]);

// The following equivalent routes are created:
$routes->post('photos/(:segment)/delete', 'Photos::delete/$1');
$routes->post('photos/(:segment)',        'Photos::update/$1');

*/

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
