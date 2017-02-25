<?php

namespace App\Controller;

if (! defined('ABSPATH')) die('permision denied');

class notFoundController extends Controller
{
    function index( $params = [] )
    {
        $args = [
            'config' => [
                'content_layout' => 'custom/not_found'
            ],
        ];

        $this->render($args);
    }
}