<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/curso/mostrar', 'Curso::mostrar');

$routes->get('/estudiante', 'Estudiante::index');
$routes->get('/estudiante/mostrar', 'Estudiante::mostrar');
$routes->get('/estudiante/agregar', 'Estudiante::agregar');
$routes->get('/estudiante/buscar', 'Estudiante::buscar');
$routes->get('/estudiante/editar/(:int)', 'Estudiante::editar/$1');
$routes->get('/estudiante/delete/(:int)','Estudiante::delete/$1');

$routes->get('/curso/agregar','Curso::agregar');
$routes->post('/curso/agregar','Curso::agregar');

$routes->get('/usuario/login','UserController::index');
$routes->post('/usuario/login','UserController::index');

$routes->post('/estudiante/insert', 'Estudiante::insert');
$routes->post('/estudiante/update', 'Estudiante::update');

$routes->get('/profesor/mostrar', 'Profesor::mostrar');
$routes->get('/profesor/agregar', 'Profesor::agregar');

$routes->post('/profesor/insert', 'Profesor::insert');
$routes->post('/profesor/update', 'Profesor::update');

$routes->get('/profesor/editar/(:int)', 'Profesor::editar/$1');
$routes->get('/profesor/delete/(:int)','Profesor::delete/$1');
/*
$routes->get('/estudiante/mostrar/(:int)/(:int)', 'Estudiante::mostrar/$1/$2');
$routes->get('/estudiante/subirimagen', 'Estudiante::subirImagen');
$routes->post('/estudiante/upload', 'Estudiante::upload');

$routes->get('/curso/mostrar', 'Curso::mostrar');

$routes->get('/estudiante/editar/(:any)', 'Estudiante::editar/$1');

$routes->post('/estudiante/insert', 'Estudiante::insert');
$routes->post('/estudiante/update/(:any)', 'Estudiante::update/$1');

$routes->get('/css/*',"");
*/


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
