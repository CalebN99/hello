<?php

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the Base class
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function() {
        $view = new Template();
        echo $view->render('views/home.html');
    });

    //Run f3
    $f3->run();