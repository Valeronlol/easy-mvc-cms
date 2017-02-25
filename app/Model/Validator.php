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
    static function credentialsValidate ($credentials, $checkUser = true)
    {
        $errors = [];
        $lang = new Lang();

        if ( preg_match("/^[0-9a-zA-Z_]{6,}$/", $credentials["login"] ) === 0) {
            $errors['login'] = $lang->printPhraseTranslate('loginError', $lang->getLanguage(), false);
        }

        if ( preg_match("/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $credentials["password"]) === 0 ) {
            $errors['password'] = $lang->printPhraseTranslate('passwordError', $lang->getLanguage(), false);
        }

        if ( $checkUser && self::isUserExists($credentials) === true ) {
            $lang = new Lang();
            $errors['login'] = $lang->printPhraseTranslate('userExists', $lang->getLanguage(), false);
        }

        if ( !empty($errors)){
            return $errors;
        } else {
            return true;
        }
    }

    /**
     * Check is user exists
     * @param $credentials array
     * @return bool
     */
    static function isUserExists($credentials)
    {
        $db = DB::getInstance();
        $pdo = $db->getPdo();
        $table = USERS_TABLE;
        $login = $credentials['login'];

        $stmt = $pdo->prepare("SELECT user FROM $table WHERE user = :name");
        $stmt->bindParam(':name', $login);
        $stmt->execute();
        $users = $stmt->rowCount();

        if ($users === 0){
            return false;
        }
        return true;
    }
}