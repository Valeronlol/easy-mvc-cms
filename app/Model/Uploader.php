<?php

namespace App\Model;

/**
 * Image uploader
 * Class Uploader
 * @package App\Model
 */
class Uploader
{
    private $image;

    /**
     * Uploader constructor.
     * @param $image
     */
    function __construct($image)
    {
        $this->image = $image;
    }

    /**
     * image upload handler
     *
     * @param $image array
     */
    function uploadImage($dir)
    {
        $file_name = $this->image['name'];
        $file_tmp = $this->image['tmp_name'];
        $this->checkDir($dir);
        return move_uploaded_file( $file_tmp, $dir . $file_name);
    }

    /**
     * Image validation
     * @return array
     */
    function imageValidate()
    {
        $status = [];
        $lang = new Lang();
        $file_name = $this->image['name'];
        $file_size = $this->image['size'];
        $tmp = explode('.', $file_name);
        $file_extension = strtolower(end($tmp));

        if ( !in_array($file_extension, ALLOWED_IMG_FORMATS) ){
            $status[] = $lang->printPhraseTranslate( 'wrongext', $lang->getLanguage(), false );
        }

        if ( $file_size > MAX_IMAGE_SIZE ){
            $status[] = $lang->printPhraseTranslate( 'maximagesize', $lang->getLanguage(), false );
        }

        return $status;
    }

    /**
     * Check is dir exists and save
     * @param $file_tmp
     * @param $file_name
     */
    function checkDir($dir)
    {
        if ( !is_dir($dir) ) {
            $oldumask = umask(0);
            mkdir( $dir, 0757, true );
            umask($oldumask);
        }
    }
}