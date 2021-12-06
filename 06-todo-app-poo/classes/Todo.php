<?php

include_once 'DataBase.php';

class Todo
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DataBase();
    }

    /**
     * Get all todos
     *
     * @return array $todos
     */
    public function getAll(): array
    {
        $sql = 'SELECT * FROM todos ORDER BY complete, due_date';
        $query = $this->pdo->launchQuery($sql);
        return $query->fetchAll();
    }

    /**
     * Get a todo by id
     *
     * @param [int] $id
     * @return array $todo
     */
    public function get($id)
    {
        $sql = 'SELECT * FROM todos WHERE id = :id';
        $query = $this->pdo->launchQuery($sql, ['id' => $id]);
        return $query->fetch();
    }
}
