<?php declare(strict_types=1);

// Autoload the classes
require dirname(__DIR__) . '/vendor/autoload.php';

$router = new App\Router\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

ray($router->getRoutes());

$router->dispatch($_SERVER['QUERY_STRING']);