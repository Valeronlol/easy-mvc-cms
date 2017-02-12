<?php
namespace App\Controller;

use App\Model\DB;
use App\View\View;

/**
 * Class Controller - base application class controllers
 * @package App\Controller
 */
class Controller
{
    private $db;

    /**
     * mainController constructor.
     * @param $loader object autoloader
     */
    function __construct($loader)
    {
        $this->db = DB::getInstance();
        $this->index();
    }

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
	 *  Default page
	 */
	function index(){}
}