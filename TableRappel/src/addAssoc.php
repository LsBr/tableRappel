<?php 
require 'assocsFunctions.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    return;
}

if (isset($_POST['numberForm']) && isset($_POST['wordForm']) && isset($_POST['imgUrlForm'])) {
    addAssociation($_POST['numberForm'], $_POST['wordForm'], $_POST['imgUrlForm']);
}