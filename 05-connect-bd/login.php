<?php

if (isset($_POST['submit'])) {
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // ou bien
    extract($_POST);

    $errors = [];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors['email'] = 'Please enter a valid email';
        goto show_form;
    }

    if (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters';
        goto show_form;
    }
    // verifier si l'email existe dans la bd




    //
}
show_form:
$template = 'login';
$pageTitle = 'Login page';
include './layout.phtml';
