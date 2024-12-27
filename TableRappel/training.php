<?php

require('src/assocsFunctions.php');

session_start();

if (!isset($_SESSION['loggedin'])) {
    Header("Location: /Tablerappel");
    exit();
}

$currentPath = htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ENT_QUOTES, 'UTF-8');
$currentPage = basename($currentPath);
$nbToWordUrl = $currentPage . (strpos($currentPage, '?') !== false ? '&' : '?') . 'trainingType=nbToWord';
$imgToNbUrl = $currentPage . (strpos($currentPage, '?') !== false ? '&' : '?') . 'trainingType=imgToNb';

if (isset($_GET['trainingType'])) {
    switch ($_GET['trainingType']) {
        case 'nbToWord' :
            $randomAssoc = getRandomAssoc(); 
            require('templates/nbToWord.php');
        break;
        case 'imgToNb' : 
            $randomAssoc = getRandomAssoc(); 
            require('templates/imgToNb.php');
        break;
        default: 
        require('templates/trainHome.php');
        break;
    }
}
else {
    $randomAssoc = getRandomAssoc();
    require('templates/trainHome.php');
}
