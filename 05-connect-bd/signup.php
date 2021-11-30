<?php

session_start();
if (isset($_SESSION['username'])) {
    header('Location: ./index.php');
    exit();
}
include './dbconnect.php';

$errors = [];

if (isset($_POST['submit'])) {
    extract($_POST);

    if (strlen(trim($username)) < 3) {
        $errors[0] = 'Username must be at least 3 characters';
        goto show_form;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors[0] = 'Please enter a valid email';
        goto show_form;
    }
    if (strlen($password) < 6) {
        $errors[0] = 'Password must be at least 6 characters';
        goto show_form;
    }
    if (strlen($confirm_password) < 6) {
        $errors[0] = 'Confirmed password must be at least 6 characters';
        goto show_form;
    }
    if ($confirm_password != $password) {
        $errors[0] = 'Passwords do not match';
        goto show_form;
    }
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
    ]);
    header('Location: ./login.php');
}
show_form:
$template = 'signup';
$pageTitle = 'Signup page';
include './layout.phtml';
