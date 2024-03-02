<?php
    require_once "Autoload.php";
    $router = new Router();

    // Router
    $router->add("","homeController@index");
    $router->add("home","homeController@index");
    $router->add("register","homeController@addUser");

    $requestedURL = isset($_GET['url'])?$_GET['url'] : '';
    $router->dispatch($requestedURL);