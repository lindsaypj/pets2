<?php

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the Base class
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function(){
        //echo "My Pets";
      $view = new Template();
        echo $view->render('views/pet-home.html');
    });

    $f3->route('GET /order', function(){
        $view = new Template();
        echo $view->render('views/pet-order.html');
    });

$f3->route('GET /order2', function(){
    $view = new Template();
    echo $view->render('views/summary.html');
});

    //Run fat free
    $f3->run();