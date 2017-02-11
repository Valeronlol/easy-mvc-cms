<?php
namespace App\Model;

/**
 * Database class
 */
class DB
{
    private $pdo;
    private static $instance = null;

    private function __construct()
    {
        try {
            $this->pdo = new \PDO('mysql:host='. HOST .';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        } catch ( \PDOException $e ) {
            die('Error Connecting To DataBase');
        }
    }

    // Classical singleton
    static function getInstance()
    {
        if ( self::$instance == null ) {
            self::$instance = new DB();
        }

        return self::$instance;
    }

}