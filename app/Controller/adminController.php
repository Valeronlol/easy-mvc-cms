<?php

namespace App\Controller;

use App\Model\Lang;
use App\Model\Uploader;

if (! defined('ABSPATH')) die('permision denied');

class adminController extends Controller
{
    /**
     * index admin action
     * @param array $params
     */
    function index ( $params = [] )
    {
        if ( $this->isAuthorized() ){
            $this->mainAdmin($params);
        } else {
            header('Location: /');
            exit;
        }
    }

    /**
     * @param $params array
     */
    function mainAdmin($params)
    {
        if ( isset($_FILES['image']) ){
            $uploadResult = $this->upload();
        }

        $args = [
            'config' => [
                'custom_sidebar' => 'admin_sidebar',
                'sidebar' => 'left',
                'content_layout' => 'custom/admin_panel'
            ],
            'uploadResult' => !empty($uploadResult) ? $uploadResult : null
        ];

        $this->render($args);
    }

    /**
     * Upload handler
     */
    function upload()
    {
        $uploader = new Uploader($_FILES['image']);
        $errors = $uploader->imageValidate(UPLOADS_FOLDER);
        if ( empty($errors) ){
            if ( $uploadResult = $uploader->uploadImage(UPLOADS_FOLDER) ){
                return $uploadResult;
            }
        }
        return $errors;
    }
}