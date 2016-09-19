<?php

use Enaylal\Routing\Router;

$router->get('/', 'HomeController@index');
$router->get('/admin', 'AdminController@index');
