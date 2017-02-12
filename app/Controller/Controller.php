<?php
namespace App\Controller;

use App\View\View;

/**
 * Class Controller - base application class controllers
 * @package App\Controller
 */
class Controller
{
	/**
	 * Render some template
	 *
	 * @param array $args template configuration
	 */
    function render( $args = [] ){
        $view = new View();
        $view->render( $args );
    }

	/**
	 * mainController constructor.
	 * @param $loader object autoloader
	 */
	function __construct($loader)
	{
		$this->index();
	}

	/**
	 *  Default page
	 */
	function index(){}
}