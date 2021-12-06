<?php

$errors = [];
$title = '';
$description = '';
$due_date = '';

if (!empty($_POST)) {

    include_once './utilities.php';
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
        include './classes/Todo.php';

        $todo = new Todo();
        $id = $todo->create($title, $due_date, $description);

        header('Location: todo_details.php?id=' . $id);
        exit;
    }
}

$template = 'add_todo';
$pageTitle = 'Add todo page';
include './layout.phtml';
