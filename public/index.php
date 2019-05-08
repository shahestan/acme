<?php

    require dirname(__DIR__) . '/bootstrap/start.php';
    // Load .env file for configuration
    $dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
    $dotenv->load();
    require dirname(__DIR__) . '/bootstrap/db.php';
    require dirname(__DIR__) . '/routes.php';

    $match = $router->match();

    list($controller, $method) = explode("@", $match['target']);

    if (is_callable(array($controller, $method))) {
        $object = new $controller();
        call_user_func_array(array($object, $method), array($match['params']));
    } else {
        echo "can not find $controller -> $method";
        exit();
    }
