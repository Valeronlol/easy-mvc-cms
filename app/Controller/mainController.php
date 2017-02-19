<?php
namespace App\Controller;

use App\Model\Validator;
use App\Model\Auth;

if (! defined('ABSPATH')) die('permision denied');

/**
 * Application main controller
 */
class mainController extends Controller
{
    /**
     *  Default page
     */
    function index()
    {
        $credentials = $this->getCredentials();

        if ( isset($_POST['submit']) ){
            $validateResult = Validator::credentialsValidate($credentials);
        } else {
            $validateResult = [];
        }

        if ( $validateResult === true ){
            $auth = new Auth();
            if( $auth->checkCredentials($credentials) ){
                // TODO redirect to admin panel
            }
        }

        // TODO create user form and method !!11

        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
//                'sidebar' => 'left',
//                'content_layout' => 'custom/register_content'
            ],
            'validation' => $validateResult
        ];
        $this->render($args);
    }

    function register ()
    {
        echo 'register';
    }

    function notFound()
    {
        echo '404 bro';
    }

    /**
     * get credentials from $_POST
     */
    function getCredentials()
    {
        isset($_POST['login']) ? $login = trim($_POST['login']) : $login = '';
        isset($_POST['password']) ? $password = trim($_POST['password']) : $password = '';

        return [
            'login' => $login,
            'password' => $password
        ];
    }

}