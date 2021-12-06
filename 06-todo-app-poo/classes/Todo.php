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
        $query = $this->pdo->launchQuery($sql);
        return $query->fetchAll();
    }

    public function get($id)
    {
        $sql = 'SELECT * FROM todos WHERE id = :id';
        $query = $this->pdo->launchQuery($sql, ['id' => $id]);
        return $query->fetch();
    }
}
