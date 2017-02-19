<?php
namespace App\Controller;

use App\Model\DB;
use App\View\View;
use App\Model\Auth;

if (! defined('ABSPATH')) die('permision denied');
/**
 * Class Controller - base application class controllers
 * @package App\Controller
 */
class Controller
{
    private $db, $auth;

    /**
     * Controller constructor.
     */
    function __construct()
    {
        $this->db = DB::getInstance();
        $this->auth = new Auth();
    }

	/**
	 * Render some template
	 *
	 * @param array $args template configuration
	 */
    function render( $args = [] )
    {
        $view = new View();
        $view->render( $args );
    }

    /**
     * Check is current user authorized
     * @return boolean
     */
    function isAuthorized()
    {
        return $this->auth->checkAuthorized();
    }
}