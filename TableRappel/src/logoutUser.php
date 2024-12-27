<?php 
require 'usersFunctions.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    return;
}

logoutUser();
header("Location: /Tablerappel");
exit();