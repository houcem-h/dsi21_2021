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
        $sql = 'SELECT * FROM todos WHERE user_id= :id ORDER BY complete, due_date';
        $query = $this->pdo->launchQuery($sql, ['id' => $_SESSION['id']]);
        return $query->fetchAll();
    }

    /**
     * Get a todo by id
     *
     * @param int $id
     * @return array $todo
     */
    public function get(int $id): array
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
    public function create(string $title, string $due_date, string $description): int
    {
        $sql = "INSERT INTO todos (title, description, due_date, user_id) VALUES (?, ?, ?, ?)";
        $this->pdo->launchQuery($sql, [$title, $description, $due_date, $_SESSION['id']]);
        return $this->pdo->lastInsertId();
    }

    /**
     * Update a todo
     * 
     * @param string $title
     * @param string $due_date
     * @param string $description
     * @param int $id
     * @return void
     */
    public function edit(string $title, string $due_date, string $description, int $id): void
    {
        $sql = "UPDATE todos 
                SET
                    title = ?,
                    description = ?,
                    due_date = ?
                WHERE id = ?";
        $this->pdo->launchQuery($sql, [$title, $description, $due_date, $id]);
    }

    /**
     * Delete a todo
     *
     * @param integer $id
     * @return void
     */
    public function remove(int $id): void
    {
        $sql = 'DELETE FROM todos WHERE id = :id';
        $this->pdo->launchQuery($sql, ['id' => $id]);
    }
}
