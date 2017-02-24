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
        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
                'custom_sidebar' => 'admin_sidebar',
                'sidebar' => 'left',
                'content_layout' => 'custom/admin_panel'
            ],
        ];

        if ( isset($_FILES['image']) ){
            $this->upload();
        }

        $this->render($args);
    }

    /**
     * Upload handler
     */
    function upload()
    {
        $uploader = new Uploader($_FILES['image']);
        $errors = $uploader->imageValidate();
        if ( empty($errors) ){
            if ( $uploadResult = $uploader->uploadImage(UPLOADS_FOLDER)) {
                // TODO вывести статус успеха загрузки
                return 'suxes';
            }
        }
        // TODO вывести ошибки загрузки
        return $errors;
    }
}