<?php

include_once 'DataBase.php';

class User
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DataBase();
    }
}
