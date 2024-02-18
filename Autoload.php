<?php
    spl_autoload_register(function ($class) {

        //Autoload for eksternal file
        $controllerPath = __DIR__ . "/" . $class . ".php";
        if(file_exists($controllerPath)) {
            require_once $controllerPath;
        }

        // Autolaod Controller
        $controllerPath = __DIR__ . "/Controllers/" . $class . ".php";
        if(file_exists($controllerPath)) {
            require_once $controllerPath;
        }

        // Autoload Model and Database
        $controllerPath = __DIR__ . "/Models/" . $class . ".php";
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
        }


    });