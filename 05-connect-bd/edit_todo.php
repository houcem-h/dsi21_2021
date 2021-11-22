<?php
if (!array_key_exists('id', $_GET) or !ctype_digit($_GET['id'])) {
    header('Location: index.php');
    exit();
}

include './dbconnect.php';
$query = $pdo->prepare('SELECT * FROM todos WHERE id= ?');
$query->execute([$_GET['id']]);
$todo = $query->fetch();

if (!$todo) {
    header('Location: index.php');
    exit();
}

$template = 'edit_todo';
$pageTitle = 'Edit Todo';
include './layout.phtml';
