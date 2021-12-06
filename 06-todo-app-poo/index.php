<?php

include './classes/Todo.php';

$todo = new Todo();
$todos = $todo->getAll();


$template = 'index';
$pageTitle = 'Home page';
include './layout.phtml';
