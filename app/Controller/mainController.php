<?php
namespace App\Controller;

use App\Model\DB;

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
        $db = DB::getInstance();

        $args = [
            'name' => 'vasya',
            'age' => 28,
            'config' => [
//                'sidebar' => 'left',
//                'content_layout' => 'custom/register_content'
            ]
        ];
        var_dump($_POST);
        $this->render();

    }

}