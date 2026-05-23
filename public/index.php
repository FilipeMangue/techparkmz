<?php

declare(strict_types=1);

use App\Core\Router;
use App\Core\Session;

require_once __DIR__ . '/../app/Core/Autoload.php';

Session::start();

$router = new Router();

$router->get('/', 'PublicController@home');
$router->get('/sobre', 'PublicController@about');
$router->get('/servicos', 'PublicController@services');
$router->get('/solucoes', 'PublicController@solutions');
$router->get('/startups', 'PublicController@startups');
$router->get('/eventos', 'PublicController@events');
$router->get('/recursos', 'PublicController@resources');
$router->get('/progresso', 'PublicController@progress');
$router->get('/contactos', 'PublicController@contact');

$router->get('/login', 'AuthController@loginForm');
$router->post('/login', 'AuthController@login');
$router->post('/logout', 'AuthController@logout');

$router->get('/admin', 'DashboardController@index');
$router->get('/admin/servicos', 'ServiceController@index');
$router->get('/admin/servicos/criar', 'ServiceController@create');
$router->post('/admin/servicos', 'ServiceController@store');
$router->get('/admin/auditoria', 'AuditController@index');
$router->get('/admin/metricas', 'MetricController@index');

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
