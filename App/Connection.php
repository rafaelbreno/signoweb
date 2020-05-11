<?php


namespace App;


use PDO;
use PDOException;

class Connection
{
    public static function getDB()
    {
        try {
            return new PDO("mysql:host=127.0.0.1;dbname=signoweb;charset=utf8", "root", "");
        } catch (PDOException $e) {
            return $e;
        }
    }
}