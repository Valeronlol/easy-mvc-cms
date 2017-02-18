<?php
namespace App\View;

if (! defined('ABSPATH')) die('permision denied');
/**
 * View class
 */
class View
{
    /**
     * @param array $args layout configuration,
     * you can chose between 'left' and 'right' sidebar position,
     * by default is false.
     * Also you can chose content_layout, by default 'content.php'
     */
    function render( $args = [] )
    {
        extract( $this->setDefaultsLayout($args) );

        ob_start();
        require 'templates/page.php';
        $str = ob_get_contents();
        ob_end_clean();
        echo $str;
    }

    /**
     * Set default params to layout.
     *
     * @param $args array
     * @return array
     */
    protected function setDefaultsLayout($args)
    {
        if ( !isset($args['config']['sidebar']) ){
            $args['config']['sidebar'] = false;
        }

        if ( !isset($args['config']['content_layout']) ){
            $args['config']['content_layout'] = 'content';
        }

        if ( $args['validation'] === true ){
            $args['validation'] = [];
            $args['validation']['password'] = '';
            $args['validation']['login'] = '';
        }

        return $args;
    }
}