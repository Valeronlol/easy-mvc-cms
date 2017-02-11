<?php
namespace App\View;

/**
 * View class
 */
class View
{
    /**
     * @param $template
     * @param array $args
     * @return string
     */
    function render( $args = [] ) {

        //default sidebar is OFF
        $config['sidebar'] = false;
        extract($args);

        ob_start();
        require 'templates/page.php';
        $str = ob_get_contents();
        ob_end_clean();
        echo $str;
    }
}