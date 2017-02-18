<?php
namespace App\Model;

if (! defined('ABSPATH')) die('permision denied');
/**
 * Database class
 *
 * @param string $table table name
 */
class DB
{
    private $pdo;
    private static $instance = null;

    /**
     * DB constructor.
     *
     * @param string $table table name
     */
    private function __construct( $table = USERS_TABLE )
    {
        try {
            $this->pdo = new \PDO( 'mysql:host='. HOST .';dbname='.DB_NAME, DB_USER, DB_PASSWORD );
        } catch( \PDOException $e ) {
            die( 'Error Connecting to DataBase' . $e->getMessage() );
        }

        if ( !$this->isTableExists($table) ){
            $this->createTable($table);
        }
    }

    /**
     * Classical db singleton
     *
     * @return DB|null
     */
    public static function getInstance()
    {
        if ( self::$instance == null ) {
            self::$instance = new DB();
        }

        return self::$instance;
    }

    /**
     * Check if a table exists in the current database.
     *
     * @param string $table Table to search for.
     * @return bool TRUE if table exists, FALSE if no table found.
     */
    private function isTableExists( $table )
    {
        try {
            $result = $this->pdo->query("SELECT 1 FROM $table LIMIT 1");
        } catch ( \PDOException $e) {
            return false;
        }

        return $result !== false;
    }

    /**
     * Create new table
     *
     * @param $table string table name
     */
    private function createTable($table) {
        $this->pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
        $sql ="CREATE table $table(
             ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
             user VARCHAR( 50 ) NOT NULL,
             password VARCHAR( 255 ) NOT NULL, 
             first_name VARCHAR( 100 ) NOT NULL,
             last_name VARCHAR( 100 ) NOT NULL,
             last_login TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP );";
        $this->pdo->exec($sql);
    }

    /**
     * PDO getter
     *
     * @return \PDO instance
     */
    function getPdo (){
        return $this->pdo;
    }
}