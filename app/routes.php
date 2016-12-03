<?php

use Enaylal\Routing\Router;

$router->get('/', 'HomeController@index');
/*
 * Test envoi de mail
 */
$router->get('/phpmailer', 'MailController@test_mail');

/*
 * Groupe de chemin pour l'administration
 */

$router->group('/admin', function(Router $router) {
    $router->get('/', 'AdminController@index');
    $router->get('/all', 'AdminController@all');
    $router->get('articles/{id}','AdminController@single');


});

$router->get('/demo', 'DemoController@index');
