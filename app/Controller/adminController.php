<?php

namespace App\Controller;

use App\Model\Lang;

if (! defined('ABSPATH')) die('permision denied');

class adminController extends Controller
{
    /**
     * index admin action
     * @param array $params
     */
    function index ( $params = [] )
    {
        if ( $this->isAuthorized() ){
            $this->mainAdmin($params);
        } else {
            header('Location: /');
            exit;
        }
    }

    /**
     * @param $params array
     */
    function mainAdmin($params)
    {
        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
                'sidebar' => 'left',
                'content_layout' => 'custom/admin_panel'
            ],
        ];
        $this->render($args);
    }
}