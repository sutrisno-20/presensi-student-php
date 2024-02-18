<?php
    class Router {
        private $routes = [];

        public function add($route, $controller) {
            $this->routes[$route] = $controller;
        }

        // check url
        public function dispatch($url) {
            if(array_key_exists($url,$this->routes)) {
                $controllerAction = explode('@', $this->routes[$url]);
                $controllerName = $controllerAction[0];
                $action = $controllerAction[1];

                // calling the file patch
                require_once "Controllers/$controllerName.php";
                $controller = new $controllerName;

                // check, if function/ method $action there is in object/class $controller;
                if(method_exists($controller, $action)) {
                    $controller->$action();
                }else {
                    echo "404 Not Found";
                }
            }else {
                echo "404 Not Found";
            }
        }

        // path views
        public static function view($page,$data=array()) {
            $path = "Views/$page.php";
            extract($data);
            include($path);
        }
    }