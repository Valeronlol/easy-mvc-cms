<?php
namespace App\Controller;

use App\Model\DB;

/**
 * Application main controller
 */
class mainController extends Controller
{
    /**
     * mainController constructor.
     * @param $loader object autoloader
     */
    function __construct($loader)
    {
        $this->init();
    }

    /**
     * @param $loader object autoloader
     */
    function init()
    {
        $db = new DB();
        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
                'sidebar' => 'left'
            ]
        ];
        $this->render( $args );


    }


}