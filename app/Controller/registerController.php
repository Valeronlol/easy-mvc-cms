<?php

namespace App\Controller;


class registerController extends Controller
{
    /**
     * @param array $params
     */
    function index ( $params = [] )
    {
        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
//                'sidebar' => 'left',
                'content_layout' => 'custom/register_panel'
            ],
        ];
        $this->render($args);
    }
}