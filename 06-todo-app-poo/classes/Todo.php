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

    /**
     * Create a new todo
     *
     * @param string $title
     * @param date $due_date
     * @param string $description
     * @return int $id
     */
    public function create($title, $due_date, $description)
    {
        $sql = "INSERT INTO todos (title, description, due_date, user_id) VALUES (?, ?, ?, ?)";
        $this->pdo->launchQuery($sql, [$title, $description, $due_date, 1]);
        return $this->pdo->lastInsertId();
    }
}
