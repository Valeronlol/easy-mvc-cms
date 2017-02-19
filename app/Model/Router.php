<?php

namespace App\Model;

if (! defined('ABSPATH')) die('permision denied');

/**
 * Class Router
 * @package App\Model
 */
class Router {
    
    private $routes, $route;

    /**
     * Router constructor.
     */
    function __construct()
    {
        $this->routes = ROUTES;
        $this->route = urldecode( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ));
    }

    /**
     * Run routing
     */
    function run ()
    {
        if ( isset( $this->routes[$this->route]) ) {
            $controller = 'App\\Controller\\' . $this->routes[$this->route]['controller'] . 'Controller';
            $obj = new $controller();
            $obj->{$this->routes[$this->route]['action']}();
        } else {
            header('Location: /404');
            exit;
        }
    }

}