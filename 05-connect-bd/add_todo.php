<?php

include './dbconnect.php';

if (!empty($_POST)) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO todos (title, description, due_date) VALUES (?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$title, $description, $due_date]);

    header('Location: index.php');
    exit;
}

$template = 'add_todo';
$pageTitle = 'Add todo page';
include './layout.phtml';
