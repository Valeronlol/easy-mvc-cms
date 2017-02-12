<?php
namespace App\Controller;

use App\Model\Validator;

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
        $validateResult = Validator::credentialsValidate( $this->getCredentials() );

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

    /**
     * get credentials from $_POST
     */
    function getCredentials()
    {
        if ( isset($_POST['login']) ){
            $login = trim($_POST['login']);
        } else {
            $login = '';
        }

        if ( isset($_POST['password']) ){
            $password = trim($_POST['password']);
        } else {
            $password = '';
        }

        return [
            'login' => $login,
            'password' => $password
        ];
    }

}