<?php

require('src/assocsFunctions.php');

session_start();
$assocs = array();

if (isset($_SESSION['loggedin'])) {
    $assocs = getAssociations();
}
require('templates/homepage.php');