<?php

namespace App\Model;

if (! defined('ABSPATH')) die('permision denied');

/**
 * Class Router
 * @package App\Model
 */
class Router {
    
    private $routes, $route, $params;

    /**
     * Router constructor.
     */
    function __construct()
    {
        $this->routes = ROUTES;
        $route = urldecode( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ));
        $route = $this->splitUrl($route);

        $this->route = $this->createRoute($route);
        $this->params = $this->createParams($route);
    }

    /**
     * Run routing
     */
    function dispatch ()
    {
        if ( isset($this->routes[$this->route]) ) {
            $controller = 'App\\Controller\\' . $this->routes[$this->route]['controller'] . 'Controller';
            $obj = new $controller();

            $method = $this->routes[$this->route]['action'];
            $obj->$method($this->params);
        } else {
            header('Location: /404');
            exit;
        }
    }

    /**
     * Create params from url string
     * @return array
     */
    private function createParams($route)
    {
        $params = $route;
        unset($params[0]);
        return array_values($params);
    }

    /**
     * Create array from url string
     *
     * @param $url
     * @return array
     */
    private function splitUrl($url) {
        return preg_split('/\//', $url, -1, PREG_SPLIT_NO_EMPTY);
    }

    private function createRoute($route)
    {
        return '/' . array_shift($route);
    }

}