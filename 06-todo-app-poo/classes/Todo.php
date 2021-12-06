<?php

include_once 'DataBase.php';

class Todo
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DataBase();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM todos ORDER BY complete, due_date';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
