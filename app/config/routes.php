<?php

use flight\Engine;
use flight\net\Router;
// Custom classes
use app\middlewares\AuthMiddleware;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */


$router->get('/', function () {
    Flight::render('landing/index', ['title' => 'Landing']);
});

$router->group('/dashboard', function () use ($router) {
    $router->get('/', function () { echo "Dashboard"; });
}, [ new AuthMiddleware() ]);