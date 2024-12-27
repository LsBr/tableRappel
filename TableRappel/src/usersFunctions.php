<?php
require 'dbConnection.php';

function addUser($username, $email, $password)
{
    $db = dbConnection::getInstance();

    $checkUserQuery = "SELECT COUNT(*) FROM users WHERE username = :username OR email = :email";
    $checkUser = $db->prepare($checkUserQuery);
    $checkUser->execute(['username' => $username, 'email' => $email]);

    if ($checkUser->fetchColumn() > 0) {
        return false;
    }

    $sqlQuery = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";

    $insertRecipe = $db->prepare($sqlQuery);

    $password_ = password_hash($password, PASSWORD_DEFAULT);

    $success = $insertRecipe->execute([
        'username'=> $username,
        'email'=> $email,
        'password'=> $password_
    ]);

    return $success;
}

function loginUser($username, $password) {
    $db = dbConnection::getInstance();

    $statement = $db->prepare('SELECT id, password FROM users WHERE username=:username');
    $statement->execute(['username' => $username]);
    $user = $statement->fetch();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_regenerate_id();
            $_SESSION['loggedin'] = true; 
            $_SESSION['id'] = $user['id']; 
            $_SESSION['username'] = $username;
            return true;
        }
    }
    return false;
}

function logoutUser() {
    session_destroy();
}