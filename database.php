<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 21.03.2021
 * Time: 17:40
 */

class Database {
    protected $db;

    public function __construct()
    {
        $env      = "localhost";
        $userName = "root";
        $password = "";
        $dbName   = "cetinlerperde";

        try {
            $this->db = new PDO("mysql:host=$env;dbname=$dbName;charset=utf8", $userName, $password);
        }
        catch(PDOException $e)
        {
            echo "Bağlantı hatası: " . $e->getMessage();
        }


    }
}