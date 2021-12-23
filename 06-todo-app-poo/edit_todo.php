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
        $res = $todo->edit($title, $due_date, $description, $id);

        header('Location: todo_details.php?id=' . $id);
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
