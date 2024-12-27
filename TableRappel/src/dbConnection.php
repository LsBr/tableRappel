<?php

class dbConnection
{
    protected static $instance;
    private static $dsn = 'mysql:host=localhost;dbname=table_rappel;charset=utf8';
    private static $username = 'root';
    private static $password = 'root';

    private function __construct()
    {
        try {
            self::$instance = new PDO(self::$dsn, self::$username, self::$password);
        } catch (Exception $e) {
            die("MySql Connection Error: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            new self();
        }

        return self::$instance;
    }
}