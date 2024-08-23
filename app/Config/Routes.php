<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Data;
use App\Controllers\Main;
use CodeIgniter\public\assets;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index1');

$routes->setAutoRoute(true);


$routes->get('pages', [Main::class, 'index']);
$routes->get('eskuizkribuak', [Main::class, 'eskuizkribuak']);
$routes->get('bizitza', [Main::class, 'bizitza']);
$routes->get('edizioak', [Main::class, 'edizioak']);
$routes->get('eskuizkribuxehetasunak', [Main::class, 'eskuizkribuxehetasunak']);
$routes->get('edizioxehetasunak', [Main::class, 'edizioxehetasunak']);
$routes->get('eskuatal', [Main::class, 'eskuatal']);
$routes->get('ediatal', [Main::class, 'ediatal']);
$routes->get('euskalkia', [Main::class, 'euskalkia']);
$routes->get('konkordantzia', [Main::class, 'index']);
$routes->get('/bilatu', [Main::class, 'bilatu']);
//$routes->get('(:segment)', [Main::class, 'testo']);


$routes->get('data', [Data::class, 'index']);
