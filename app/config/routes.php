<?php

use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */

 
$router->get('/', function () {
    Flight::render('landing/index', ['title' => 'Landing']);
});