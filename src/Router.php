<?php

namespace App;

class Router {
    private static $routes = [];

    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function match() {
        foreach(self::$routes as $route) {
            if($route['path'] === $this->path){
                return $route;
            }
        }
        return false;
    }

    public static function getRoutes(){
        return self::$routes;
    }

    public static function addRoute($path, $action) {
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
}