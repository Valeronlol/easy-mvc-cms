<?php

namespace App\Controller;

if (! defined('ABSPATH')) die('permision denied');

class notFoundController
{
    function index( $params = [] )
    {
        echo '404 not found';
    }
}