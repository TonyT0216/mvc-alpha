<?php declare(strict_types=1);

// Autoloader
require dirname(__DIR__) . '/vendor/autoload.php';

$router = new App\Router\Router();
//$router->dispatch();

echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';