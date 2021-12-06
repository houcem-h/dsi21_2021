<?php

class DataBase extends PDO
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'dsi21_todo_app';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    public function __construct()
    {
        $dsn = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME;
        try {
            // new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
            // or
            parent::__construct($dsn, self::DB_USER, self::DB_PASSWORD);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->query('SET NAMES UTF8');
            // echo 'Connected to database';
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }
}
