<?php

session_start();
if (isset($_SESSION['username'])) {
    header('Location: ./index.php');
    exit();
}
include './classes/User.php';
include './classes/File.php';

$errors = [];

if (isset($_POST['submit'])) {
    extract($_POST);
    // echo '<pre>';
    // print_r(sha1(rand()));
    // echo '</pre>';
    // exit;
    $file = new File('./storage/avatars/', $_FILES['avatar']);

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

    $uploadFile = $file->uploadFile();
    if ($uploadFile == false) {
        $errors[0] = 'File upload failed';
        goto show_form;
    }
    $avatar = './storage/avatars/' . $file->getFileName();

    $user = new User();
    $signup = $user->signup($username, $email, $password, $avatar);
    if (is_int($signup)) {
        header('Location: ./login.php');
        exit();
    } else {
        $errors[0] = $signup;
    }
}
show_form:
$template = 'signup';
$pageTitle = 'Signup page';
include './layout.phtml';
