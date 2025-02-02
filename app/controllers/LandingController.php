<?php
namespace app\controllers;

use Flight;

class LandingController
{
  public function __construct()
  {
  }

  public function landingPage()
  {
    Flight::render('landing');
    exit;
  }
}