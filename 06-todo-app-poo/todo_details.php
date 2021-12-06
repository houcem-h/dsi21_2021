<?php

include './classes/Todo.php';

$todo = new Todo();
$todo = $todo->get($_GET['id']);

if (!$todo) {
    header('Location: index.php');
    exit();
}

$template = 'todo_details';
$pageTitle = 'Todo details';
include './layout.phtml';
