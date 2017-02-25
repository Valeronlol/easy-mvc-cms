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
        $lang = new Lang();

        if ( preg_match("/^[0-9a-zA-Z_]{6,}$/", $credentilas["login"] ) === 0) {
            $errors['login'] = $lang->printPhraseTranslate('loginError', $lang->getLanguage(), false);
        }

        if ( preg_match("/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $credentilas["password"]) === 0 ) {
            $errors['password'] = $lang->printPhraseTranslate('passwordError', $lang->getLanguage(), false);
        }

        if ( !empty($errors)){
            return $errors;
        } else {
            return true;
        }
    }
}