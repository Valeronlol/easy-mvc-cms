<?php

namespace App\Model;

if (! defined('ABSPATH')) die('permision denied');

class Router
{
    public static $routes = array();
    public static function dispatch($controller,$action,$id)
    {
        $controller = $controller . '.php';
        if (file_exists( $controller ))
        {
            include_once $controller;
            $controllerObj = new $controller();
            $controllerObj->$action($id);
        } else {
            die('404');
        }
    }
    public static function addRoute($httpMethod, $path, $controller, $action)
    {
        static::$routes[] = array(
            'httpMethod'		=> $httpMethod,
            'path'			=> $path,
            'controller'		=> $controller,
            'action'		=> $action
        );
    }
    public static function doRoute($httpMethod, $path)
    {
        foreach(static::$routes as  $route)
        {
            if (preg_match($route['path'], $path, $groups) && $httpMethod == $route['httpMethod'])
            {
                static::dispatch($route['controller'],$route['action'], isset($groups[1]) ? $groups[1] : null);
                break;
            }
        }
    }
}