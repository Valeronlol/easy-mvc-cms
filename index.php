<?php
/**
 * Project bootstrap file.
 *
 * @author Valeron
 */

$DEV_MODE = true; // Developer mode true/false, turn off on production

/**
 * Dev mode activation
 */
if ($DEV_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

/**
 * Composer autoloading enabling
 */
require_once __DIR__ . '/vendor/autoload.php';

$app = new App\Controller\mainController;
$app->test();