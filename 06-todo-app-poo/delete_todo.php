<?php


if (!array_key_exists('id', $_GET) or !ctype_digit($_GET['id'])) {
    header('Location: index.php');
    exit();
}


include './classes/Todo.php';

$todo = new Todo();
$todo->remove($_GET['id']);

header('Location: index.php');
exit();