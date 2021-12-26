<?php

include_once 'DataBase.php';

class User
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DataBase();
    }

    /**
     * Login user
     *
     * @param string $email
     * @param string $password
     * @return boolean
     */
    public function login(string $email, string $password): bool
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->pdo->launchQuery($sql, [
            'email' => $email,
        ]);
        $user = $stmt->fetch();
        if ($user == false) {
            return false;
        } else {
            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['avatar'] = $user['avatar'];
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Sign up user
     *
     * @param string $username
     * @param string $email
     * @param string $password
     * @return void
     */
    public function signup(string $username, string $email, string $password, string $avatar): int
    {
        $sql = "INSERT INTO users (username, email, password, avatar) VALUES (:username, :email, :password, :avatar)";
        $this->pdo->launchQuery($sql, [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'avatar' => $avatar,
        ]);
        return $this->pdo->lastInsertId();
    }
}
