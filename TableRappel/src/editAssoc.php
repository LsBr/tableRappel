<?php 
require 'assocsFunctions.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    return;
}

if (isset($_POST['assocId']) && isset($_POST['numberForm']) && isset($_POST['wordForm']) && isset($_POST['imgUrlForm'])) {
    return editAssociation($_POST['assocId'], $_POST['numberForm'], $_POST['wordForm'], $_POST['imgUrlForm']);
}