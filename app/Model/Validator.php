<?php
namespace App\Model;

if (! defined('ABSPATH')) die('permision denied');
/**
 * Validation logic class
 */
class Validator
{
    /**
     * Credentials validator
     *
     * @param $credentilas
     * @return array|bool array of errors or true
     */
    static function credentialsValidate ($credentilas)
    {
        $errors = [];

        if ( preg_match("/^[0-9a-zA-Z_]{6,}$/", $credentilas["login"] ) === 0) {
            $errors['login'] = 'Login must be bigger that 6 chars and contain only digits, letters and underscore';
        }

        if ( preg_match("/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $credentilas["password"]) === 0 ) {
            $errors['password'] = 'Password must be at least 6 characters and
             must contain at least one lower case letter,one upper case letter and one digit';
        }

        if ( !empty($errors)){
            return $errors;
        } else {
            return true;
        }
    }
}