<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}

include './classes/Todo.php';

$todo = new Todo();
$todos = $todo->getAll();


$template = 'index';
$pageTitle = 'Home page';
include './layout.phtml';
