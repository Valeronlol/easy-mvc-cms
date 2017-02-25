<?php
/**
 * Project configuration in here
 */
if (! defined('ABSPATH')) die('permision denied');

const DEV_MODE = true; // Developer mode true/false, turn off on production
const SITE_TITLE = 'Тестовое задание Кузиванова Валерия'; // Site name
const USERS_TABLE = 'users_table'; // Users tablename
const MAX_IMAGE_SIZE = 2097152; // Max image size // 2mb
const ALLOWED_IMG_FORMATS = ["jpeg","jpg","png"]; // Img format
const UPLOADS_FOLDER = 'uploads/'; // Img format

/**
 * Application routes
 */
const ROUTES = [
    '/' => ['controller' => 'login', 'action' => 'index'],
    '/register' => ['controller' => 'register', 'action' => 'index'],
    '/admin' => ['controller' => 'admin', 'action' => 'index'],
    '/404' => ['controller' => 'notFound', 'action' => 'index']
];

