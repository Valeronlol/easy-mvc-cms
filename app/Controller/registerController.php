<?php

namespace App\Controller;


use App\Model\Validator;

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

    private function register()
    {
        $credentials = [
            'login' => $_POST['login'],
            'f_name' => $_POST['f_name'],
            'l_name' => $_POST['l_name'],
            'password' => $_POST['password']
        ];

        $validateResult = Validator::credentialsValidate($credentials);

        if ( $validateResult === true ){
            if ($this->db->createUser($credentials)){
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