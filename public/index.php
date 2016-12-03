<?php

require __DIR__.'/../vendor/autoload.php';

$router = new \Enaylal\Routing\Router();

require __DIR__.'/../app/routes.php';

$database= require __DIR__.'/../app/database.php';

new \Pixie\Connection($database['driver'], $database, '\DB');

$method = 'GET';
if (isset($_SERVER['REQUEST_METHOD'])) {
    $method = $_SERVER['REQUEST_METHOD'];
}

$url = '/';

if (isset($_SERVER['REQUEST_URI'])) {
    $url = $_SERVER['REQUEST_URI'];
}

if (isset($_GET['url'])) {
    $url = $_GET['url'];
}
$url=parse_url($url, PHP_URL_PATH);
$route = $router->run($url, $method);
if ($route) {
    echo $route->run();
} else {
  $controller = new App\Controllers\ErrorController();
  echo $controller->_404();
}