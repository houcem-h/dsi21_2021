<?php

include './dbconnect.php';
include './utilities.php';

$errors = [];

if (!empty($_POST)) {
    $title = checkData($_POST['title']);
    $description = checkData($_POST['description']);
    $due_date = checkData($_POST['due_date']);

    if (empty($title)) {
        $errors['title'] = 'Title is required';
    }
    if (empty($description)) {
        $errors['description'] = 'Description is required';
    }
    if (empty($due_date)) {
        $errors['due_date'] = 'Due date is required';
    }

    if (empty($errors)) {
        $sql = "INSERT INTO todos (title, description, due_date) VALUES (?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$title, $description, $due_date]);

        header('Location: index.php');
        exit;
    }
}

$template = 'add_todo';
$pageTitle = 'Add todo page';
include './layout.phtml';
