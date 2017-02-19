<?php
namespace App\Model;

use App\Model\DB;

if (! defined('ABSPATH')) die('permision denied');
/**
 * Class Auth Base authorization class
 * @package App\Model
 */
class Auth
{
    private $db;
    private $table;
    private $pdo;

    /**
     * Auth constructor.
     */
    function __construct()
    {
        $this->table = USERS_TABLE;
        $this->db = DB::getInstance();
        $this->pdo = $this->db->getPdo();
    }

    /**
     * Check is credentials right
     *
     * @param $credentials array
     * @return bool
     */
    function checkCredentials($credentials)
    {
        $sql = 'SELECT * FROM '.$this->table.' WHERE user = ?';
        $query = $this->pdo->prepare($sql);
        $query->execute(array( $credentials['login'] ));
        $fetched = $query->fetch();

        if ( password_verify( $credentials['password'], $fetched['password']) ) {
            return true;
        }
        return false;
    }

    /**
     * is current user authorized
     * @return boolean
     */
    function checkAuthorized()
    {
        session_start();
        $credentials = $_SESSION['credentials'];
        return $this->checkCredentials($credentials);
    }
}