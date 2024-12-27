<?php
require 'usersFunctions.php';

session_start();

if (isset($_POST['username-login']) && isset($_POST['password-login'])) {
    if (loginUser($_POST['username-login'], $_POST['password-login'])) {
        $_SESSION['alert'] = array(
            'type' => 'success',
            'message' => 'You are now connected !'
        );
    } else {
        $_SESSION['alert'] = array(
            'type' => 'error',
            'message' => 'Wrong username or password'
        );
    }
} else {
    $_SESSION['alert'] = array(
        'type' => 'error',
        'message' => 'Username and password are required'
    );
}
header("Location: /Tablerappel");
exit();