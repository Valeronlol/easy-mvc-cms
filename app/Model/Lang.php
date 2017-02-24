<?php
namespace App\Model;

/**
 * Language class
 * Class Lang
 * @package App\Model
 */
class Lang
{
    /***
     * Write message in current language
     * @param $phrase
     * @param bool $echo is echo
     * @return mixed
     */
    static function printPhraseTranslate( $phrase, $lang = 'ru', $echo = true )
    {
        $ini = parse_ini_file( ABSPATH . 'config/lang/' . $lang.".ini");

        if (!$echo){
            return $ini[$phrase];
        }
        echo $ini[$phrase];
    }
}