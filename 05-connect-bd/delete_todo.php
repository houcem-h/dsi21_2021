<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}

if (!array_key_exists('id', $_GET) or !ctype_digit($_GET['id'])) {
    header('Location: index.php');
    exit();
}

include './dbconnect.php';
$query = $pdo->prepare('DELETE FROM todos WHERE id= :todo_id');
$query->execute([
    'todo_id' => $_GET['id']
]);

header('Location: index.php');
exit();
