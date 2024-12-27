<?php 
require 'assocsFunctions.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    return;
}

autoFill();