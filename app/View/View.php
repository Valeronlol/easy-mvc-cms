<?php
namespace App\View;

use App\Model\Lang;

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

    function _($phrase){
        $lang = new Lang();
        $lang->printPhraseTranslate( $phrase, $lang->getLanguage() );
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

        if ( isset($args['validation']) && $args['validation'] === true ){
            $args['validation'] = [];
            $args['validation']['password'] = '';
            $args['validation']['login'] = '';
            $args['validation']['l_name'] = '';
            $args['validation']['r_name'] = '';
        }

        return $args;
    }
}