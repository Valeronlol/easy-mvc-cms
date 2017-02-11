<?php
namespace App\Controller;

use App\View\View;

/**
 * Class Controller - base application class controllers
 * @package App\Controller
 */
class Controller
{
    function render( $args = [] ){

        $view = new View();
        $view->render( $args );
    }
}