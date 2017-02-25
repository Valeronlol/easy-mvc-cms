<?php
namespace App\Controller;

use App\Model\Lang;
use App\Model\Validator;
use App\Model\Auth;

if (! defined('ABSPATH')) die('permision denied');

/**
 * Application login controller
 */
class loginController extends Controller
{
    /**
     *  Default page
     */
    function index( $params = [] )
    {
        $lang = new Lang();
        $credentials = $this->getCredentials();

        if ( isset($_POST['submit']) ){
            $validateResult = Validator::credentialsValidate($credentials, false);
        } else {
            $validateResult = [];
        }

        if ( $validateResult === true ){
            $auth = new Auth();
            if ( $auth->checkCredentials($credentials) ){
                $this->sessionCredentials($credentials);
            } else {
                $validateResult = [ 'password' => $lang->printPhraseTranslate('wrongLogin', $lang->getLanguage(), false) ];
            }
        }

        $args = [
            'validation' => $validateResult
        ];
        $this->render($args);
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

    /**
     * Write credentials to session and redirect to route
     *
     * @param $credentials array
     */
    private function sessionCredentials ($credentials)
    {
        session_start();
        $_SESSION['credentials'] = $credentials;
        header('Location: ' . '/admin');
        exit;
    }
}