<?php


namespace DB;


use PDO;
use PDOException;
use EnvResolver\Environment;

class DBAccess
{

    protected $conn;

    function startConn()
    {
        $env = new Environment();
        $servername = $env->get('DB_HOST');
        $dbName = $env->get('DB_DATABASE');
        $username = $env->get('DB_USERNAME');
        $password = $env->get('DB_PASSWORD');

        try {

            $this->conn = new PDO("mysql:host={$servername};dbname={$dbName}", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

    }

    public function __destruct()
    {
        $this->conn = null;
    }

}