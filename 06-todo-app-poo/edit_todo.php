<?php

if (!array_key_exists('id', $_GET) or !ctype_digit($_GET['id'])) {
    header('Location: index.php');
    exit();
}

include './classes/Todo.php';
$todo = new Todo();

$errors = [];

if (!empty($_POST)) {
    include './utilities.php';

    $title = checkData($_POST['title']);
    $description = checkData($_POST['description']);
    $due_date = checkData($_POST['due_date']);
    $id = checkData($_POST['id']);

    // var_dump($_POST);
    // exit();

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
        $sql = "UPDATE todos 
                SET
                    title = :title,
                    description = :description,
                    due_date = :due_date
                WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':title', $title);
        $query->bindValue(':description', $description);
        $query->bindValue(':due_date', $due_date);
        $query->bindValue(':id', $id);
        $query->execute();

        header('Location: index.php');
        exit;
    }
}

$todo = $todo->get($_GET['id']);

if (!$todo) {
    header('Location: index.php');
    exit();
}

$template = 'edit_todo';
$pageTitle = 'Edit Todo';
include './layout.phtml';
