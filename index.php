<?php
/**
 * Project bootstrap file.
 *
 * @author Valeron
 */

define('ABSPATH', dirname(__FILE__) . '/');

/**
 * Composer autoloading activation
 */
$loader = require_once __DIR__ . '/vendor/autoload.php';

/**
 * Dev mode activation
 */
if (DEV_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

/**
 * Initialization application
 */
$app = new App\Controller\mainController($loader);

var_dump($_GET);exit;