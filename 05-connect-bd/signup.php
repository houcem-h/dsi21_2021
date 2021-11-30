<?php

session_start();
if (isset($_SESSION['username'])) {
    header('Location: ./index.php');
    exit();
}

$errors = [];

$template = 'signup';
$pageTitle = 'Signup page';
include './layout.phtml';
