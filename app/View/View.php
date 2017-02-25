<?php
namespace App\View;

use App\Model\Lang;
use App\Model\Uploader;

if (! defined('ABSPATH')) die('permision denied');
/**
 * View class
 */
class View
{
    /**
     * @param array $args layout configuration,
     * you can chose between 'left' and 'right' sidebar position,
     * by default is false.
     * Also you can chose content_layout, by default 'content.php'
     */
    function render( $args = [] )
    {
        extract( $this->setDefaultsLayout($args) );
        $gallery = $this->createGalleryFromDir();

        ob_start();
        require 'templates/page.php';
        $str = ob_get_contents();
        ob_end_clean();
        echo $str;
    }

    function _($phrase){
        $lang = new Lang();
        $lang->printPhraseTranslate( $phrase, $lang->getLanguage() );
    }

    /**
     * Set default params to layout.
     *
     * @param $args array
     * @return array
     */
    protected function setDefaultsLayout($args)
    {
        if ( !isset($args['config']['sidebar']) ){
            $args['config']['sidebar'] = false;
        }

        if ( !isset($args['config']['content_layout']) ){
            $args['config']['content_layout'] = 'content';
        }

        if ( isset($args['validation']) && $args['validation'] === true ){
            $args['validation'] = [];
            $args['validation']['password'] = '';
            $args['validation']['login'] = '';
            $args['validation']['l_name'] = '';
            $args['validation']['r_name'] = '';
        }



        return $args;
    }

    function createGalleryFromDir()
    {
        $folder_path = UPLOADS_FOLDER;
        $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
        $folder = opendir($folder_path);
        if($num_files > 0) {
            ob_start();
            while(false !== ( $file = readdir($folder)) ) {
                $file_path = $folder_path . $file;
                $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
                if($extension=='jpg' || $extension =='png' || $extension == 'jpeg'){
                    ?>
                    <a href="<?php echo $file_path; ?>">
                        <span class="bgc-img" style="background-image: url('<?php echo $file_path; ?>')"></span>
                    </a>
                    <?php
                }
            }
            $str = ob_get_contents();
            ob_end_clean();
            closedir($folder);
            return $str;
        } else {
            return "the folder was empty !";
        }

    }
}