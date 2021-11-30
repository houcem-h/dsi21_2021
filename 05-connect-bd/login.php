<?php

session_start();
if (isset($_SESSION['username'])) {
    header('Location: ./index.php');
    exit();
}

include './dbconnect.php';

$errors = [];

if (isset($_POST['submit'])) {
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // ou bien
    extract($_POST);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors[0] = 'Please enter a valid email';
        goto show_form;
    }

    if (strlen($password) < 6) {
        $errors[0] = 'Password must be at least 6 characters';
        goto show_form;
    }
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email,
    ]);
    $user = $stmt->fetch();
    if ($user == false) {
        $errors[0] = 'Wrong email or password';
        goto show_form;
    } else {
        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['avatar'] = $user['avatar'];
            header('Location: ./index.php');
        } else {
            $errors[0] = 'Wrong email or password';
            goto show_form;
        }
    }
}
show_form:
$template = 'login';
$pageTitle = 'Login page';
include './layout.phtml';
