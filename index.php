<?php

/*
 * Elijah Maret
 * IT 328
 * 1/15/2020
 * http://emaret.greenriverdev.com/328/chicken/
 * Chicken
 */

// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/about-chickens.html');
});

// Run f3
$f3->run();

