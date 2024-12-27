<?php
require 'usersFunctions.php';

session_start();

if (isset($_POST['username-register']) && isset($_POST['email-register']) && isset($_POST['password-register'])) {
    $addState = addUser($_POST['username-register'], $_POST['email-register'], $_POST['password-register']);
    if ($addState) {
        loginUser($_POST['username-register'], $_POST['password-register']);
        $_SESSION['alert'] = array(
            'type' => 'success',
            'message' => 'You are now connected !'
        );
    } else {
        $_SESSION['alert'] = array(
            'type' => 'error',
            'message' => 'Username or email already exists'
        );
    }
} else {
    $_SESSION['alert'] = array(
        'type' => 'error',
        'message' => 'All the fields are required'
    );
}

header("Location: /Tablerappel");
exit();