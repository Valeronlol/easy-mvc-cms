<?php

namespace App\Controller;


class adminController extends Controller
{
    /**
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