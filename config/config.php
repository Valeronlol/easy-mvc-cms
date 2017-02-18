<?php
/**
 * Project configuration in here
 */
if (! defined('ABSPATH')) die('permision denied');

define('DEV_MODE', true); // Developer mode true/false, turn off on production
define('SITE_TITLE', 'Тестовое задание Кузиванова Валерия'); // Site name
define('USERS_TABLE', 'users_table'); // Users tablename
define('ROUTES', [
    // 'url' => 'контроллер/действие/параметр1/параметр2/параметр3'
    '/' => 'mainController/index', // главная страница
    '/test' => 'mainController/test', // страница контактов
    '/blog' => 'BlogController/index', // список постов блога
    '/blog/:num' => 'BlogController/viewPost/$1', // просмотр отдельного поста, например, /blog/123
    '/blog/:any/:num' => 'BlogController/$1/$2', // действия над постом, например, /blog/edit/123 или /blog/dеlete/123
    '/:any' => 'MainController/anyAction' // все остальные запросы обрабатываются здесь
]);

