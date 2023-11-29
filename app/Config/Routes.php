<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('menus/menudo','Inicio::index');

$routes->get('/', 'Home::index');
$routes->get('/planta','Planta::index');
$routes->get('/planta/mostrar','Planta::mostrar');
$routes->get('/planta/agregar','Planta::agregar');
$routes->get('planta/buscar','Planta::buscar');
$routes->get('planta/editar/(:num)','Planta::editar/$1');
$routes->get('/planta/delete/(:num)','Planta::delete/$1');

$routes->post('/planta/insert','Planta::insert');
$routes->post('planta/update','Planta::update');

$routes->get('/usuario/login','UserController::index');
$routes->post('/usuario/login','UserController::index');

$routes->get('/categoria','Categoria::index');
$routes->get('/categoria/mostrar','Categoria::mostrar');
$routes->get('/categoria/agregar','Categoria::agregar');
$routes->get('/categoria/buscar','Categoria::buscar');
$routes->get('/categoria/editar/(:num)','Categoria::editar/$1');
$routes->get('/categoria/delete/(:num)','Categoria::delete/$1');

$routes->post('/categoria/insert','Categoria::insert');
$routes->post('/categoria/update','Categoria::update');

// rutas del controlador hierba
$routes->get('/hierba','Hierba::index');
$routes->get('/hierba/mostrar','Hierba::mostrar');
$routes->get('/hierba/agregar','Hierba::agregar');
$routes->get('/hierba/buscar','Hierba::buscar');
$routes->get('/hierba/editar/(:num)','Hierba::editar/$1');
$routes->get('/hierba/delete/(:num)','Hierba::delete/$1');

$routes->post('/hierba/insert','Hierba::insert');
$routes->post('/hierba/update','Hierba::update');

//rutas del controlador arbusto
$routes->get('/arbusto','Arbusto::index');
$routes->get('/arbusto/mostrar','Arbusto::mostrar');
$routes->get('/arbusto/agregar','Arbusto::agregar');
$routes->get('/arbusto/buscar','Arbusto::buscar');
$routes->get('/arbusto/editar/(:num)','Arbusto::editar/$1');
$routes->get('/arbusto/delete/(:num)','Arbusto::delete/$1');

$routes->post('/arbusto/insert','Arbusto::insert');
$routes->post('/arbusto/update','Arbusto::update');

// rutas del controlador suculenta
$routes->get('/suculenta','Suculenta::index');
$routes->get('/suculenta/mostrar','Suculenta::mostrar');
$routes->get('/suculenta/agregar','Suculenta::agregar');
$routes->get('/suculenta/buscar','Suculenta::buscar');
$routes->get('/suculenta/editar/(:num)','Suculenta::editar/$1');
$routes->get('/suculenta/delete/(:num)','Suculenta::delete/$1');

$routes->post('/suculenta/insert','Suculenta::insert');
$routes->post('/suculenta/update','Suculenta::update');

// rutas del controlador carnivora
$routes->get('/carnivora','Carnivora::index');
$routes->get('/carnivora/mostrar','Carnivora::mostrar');
$routes->get('/carnivora/agregar','Carnivora::agregar');
$routes->get('/carnivora/buscar','Carnivora::buscar');
$routes->get('/carnivora/editar/(:num)','Carnivora::editar/$1');
$routes->get('/carnivora/delete/(:num)','Carnivora::delete/$1');

$routes->post('/carnivora/insert','Carnivora::insert');
$routes->post('/carnivora/update','Carnivora::update');

//rutas del controlador medicinal
$routes->get('/medicinal','Medicinal::index');
$routes->get('/medicinal/mostrar','Medicinal::mostrar');
$routes->get('/medicinal/agregar','Medicinal::agregar');
$routes->get('/medicinal/buscar','Medicinal::buscar');
$routes->get('/medicinal/editar/(:num)','Medicinal::editar/$1');
$routes->get('/medicinal/delete/(:num)','Medicinal::delete/$1');

$routes->post('/medicinal/insert','Medicinal::insert');
$routes->post('/medicinal/update','Medicinal::update');

//rutas del controlador frutal
$routes->get('/frutal','Frutal::index');
$routes->get('/frutal/mostrar','Frutal::mostrar');
$routes->get('/frutal/agregar','frutal::agregar');
$routes->get('/frutal/buscar','Frutal::buscar');
$routes->get('/frutal/editar/(:num)','Frutal::editar/$1');
$routes->get('/frutal/delete/(:num)','Frutal::delete/$1');

$routes->post('/frutal/insert','Frutal::insert');
$routes->post('/frutal/update','Frutal::update');