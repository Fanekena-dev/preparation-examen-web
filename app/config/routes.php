<?php

use flight\Engine;
use flight\net\Router;

use app\controllers\LandingController;

/** 
 * @var Router $router 
 * @var Engine $app
 */

$router->get('/', [new LandingController(), 'landingPage']);