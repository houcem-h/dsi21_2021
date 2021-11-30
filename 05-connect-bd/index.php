<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}
include './dbconnect.php';

$query = $pdo->prepare("SELECT * FROM todos WHERE user_id= :id ORDER BY complete, due_date");
$query->execute(['id' => $_SESSION['id']]);
$todos = $query->fetchAll();

$template = 'index';
$pageTitle = 'Home page';
include './layout.phtml';
