<?php

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the Base class
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function() {
        echo '<h1>Hello, world!</h1>';
    });

    //Run f3
    $f3->run();