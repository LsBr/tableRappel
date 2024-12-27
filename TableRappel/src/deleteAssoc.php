<?php 
require 'assocsFunctions.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    return;
}

if (isset($_POST['id'])) {
    deleteAssociation($_POST['id']);
}