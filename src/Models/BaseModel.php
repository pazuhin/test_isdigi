<?php

abstract class BaseModel
{
    public static function setConnection()
    {
        $connect = require(__DIR__ . '/../Tools/config.php');
        $db = $connect['db'];
        $host = $db['host'];
        $database = $db['dbname'];
        $username = $db['username'];
        $password = $db['password'];
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        };
        return $pdo;
    }
}