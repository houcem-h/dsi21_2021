<?php
include './dbconnect.php';

$query = $pdo->prepare("SELECT * FROM todos ORDER BY complete, due_date");
$query->execute();
$todos = $query->fetchAll();

$template = 'index';
$pageTitle = 'Home page';
include './layout.phtml';
