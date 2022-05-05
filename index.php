<?php

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Start Session
    session_start();

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

$f3->route('POST /order2', function(){

    // Store data in session
    $_SESSION['animal'] = $_POST['animal'];
    $_SESSION['color'] = $_POST['color'];

    $view = new Template();
    echo $view->render('views/pet-order2.html');
});

$f3->route('POST /summary', function(){

    // Store data in session
    $_SESSION['petName'] = $_POST['petName'];

    $view = new Template();
    echo $view->render('views/order-summary.html');
});
    //Run fat free
    $f3->run();