<?php
/**
 * Project configuration in here
 */
if (! defined('ABSPATH')) die('permision denied');

const DEV_MODE = true; // Developer mode true/false, turn off on production
const SITE_TITLE = 'Тестовое задание Кузиванова Валерия'; // Site name
const USERS_TABLE = 'users_table'; // Users tablename


/**
 * Application routes
 */
const ROUTES = [
    '/' => ['controller' => 'login', 'action' => 'index'],
    '/register' => ['controller' => 'register', 'action' => 'index'],
    '/admin' => ['controller' => 'admin', 'action' => 'index'],
    '/404' => ['controller' => 'notFound', 'action' => 'index']
];

