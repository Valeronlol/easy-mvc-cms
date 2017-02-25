<?php

namespace App\Controller;

use App\Model\Lang;
use App\Model\Validator;

if (! defined('ABSPATH')) die('permision denied');

class registerController extends Controller
{
    /**
     * @param array $params
     */
    function index ( $params = [] )
    {
        if (isset($_POST['submit'])){
            $this->register();
        }

        $args = [
            'config' => [
                'content_layout' => 'custom/register_panel'
            ],
        ];
        $this->render($args);
    }

    /**
     * New user registration
     */
    private function register()
    {
        $credentials = [
            'login' => trim(strtolower($_POST['login'])),
            'f_name' => trim($_POST['f_name']),
            'l_name' => trim($_POST['l_name']),
            'password' => $_POST['password']
        ];

        $validateResult = Validator::credentialsValidate($credentials);

        if ( $validateResult === true ) {
            if ( $this->db->createUser($credentials) ){
                $_POST = [];
                header('Location: ' . '/');
                exit;
            }
        }

        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
                'content_layout' => 'custom/register_panel'
            ],
            'validation' => $validateResult
        ];
        $this->render($args);
    }


}