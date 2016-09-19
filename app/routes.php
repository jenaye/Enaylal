<?php

use Enaylal\Routing\Router;

$router->get('/', 'HomeController@index');
$router->get('/admin', 'AdminController@index');
$router->get('/news/{id:[0-9]+}', 'NewsController@details');
$router->get('/user/{name:[a-zA-Z0-9\-]+}', 'HomeController@user');

$router->group('/admin', function(Router $router) {

    $router->get('/news', 'AdminNewsController@index');

});
