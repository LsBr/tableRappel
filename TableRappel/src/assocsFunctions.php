<?php
require 'dbConnection.php';

function getAssociations()
{
    $db = dbConnection::getInstance();

    $sqlQuery = 'SELECT id, digit, word, img_url, user_id FROM associations WHERE user_id=:user_id ORDER BY digit ASC';
    $insertRecipe = $db->prepare($sqlQuery);

    $insertRecipe->execute(['user_id' => $_SESSION['id']]);

    $assocs = [];
    while (($row = $insertRecipe->fetch())) {
        $assoc = [
            'id' => $row['id'],
            'digit' => $row['digit'],
            'word' => $row['word'],
            'img_url' => $row['img_url'],
        ];
        $assocs[] = $assoc;
    }
    return $assocs;
}

function addAssociation($number, $word, $imgUrl = '')
{
    $db = dbConnection::getInstance();

    $sqlQuery = 'INSERT into associations (digit, word, img_url, user_id) VALUES (:digit, :word, :imgUrl, :user_id)';

    $insertRecipe = $db->prepare($sqlQuery);

    $success = $insertRecipe->execute([
        'digit' => $number,
        'word' => $word,
        'imgUrl' => $imgUrl,
        'user_id' => $_SESSION['id']
    ]);
}

function editAssociation($id, $number, $word, $imgUrl = '')
{
    $db = dbConnection::getInstance();

    $sqlQuery = 'UPDATE associations SET digit=:digit, word=:word, img_url=:img_url WHERE id=:id AND user_id=:user_id';


    $insertRecipe = $db->prepare($sqlQuery);

    $success = $insertRecipe->execute([
        'digit' => $number,
        'word' => $word,
        'img_url' => $imgUrl,
        'id' => $id,
        'user_id' => $_SESSION['id']
    ]);
    return $success;
}

function deleteAssociation($id)
{
    $db = dbConnection::getInstance();

    $sqlQuery = 'DELETE FROM associations WHERE id=:id AND user_id=:user_id';

    $insertRecipe = $db->prepare($sqlQuery);

    $success = $insertRecipe->execute([
        'id' => $id,
        'user_id' => $_SESSION['id']
    ]);
}

function deleteAllAssociations()
{
    $db = dbConnection::getInstance();

    $sqlQuery = 'DELETE FROM associations WHERE user_id=:user_id';
    $insertRecipe = $db->prepare($sqlQuery);

    $insertRecipe->execute([ 'user_id' => $_SESSION['id'] ]);
}

function autoFill()
{
    $db = dbConnection::getInstance();

    $sqlQuery = 'INSERT into associations (digit, word, user_id) VALUES (:digit, :word, :user_id)';

    $nbExisting[] = array();

    $insertRecipe = $db->prepare($sqlQuery);

    $assocs = getAssociations();
    foreach ($assocs as $assoc) {
        $nbExisting[] = $assoc['digit'];
    }

    for ($i = 0; $i < 100; $i++) {
        if (in_array($i, $nbExisting)) {

        } else {
            $insertRecipe->execute([
                'digit' => $i,
                'word' => 'Default',
                'user_id' => $_SESSION['id']
            ]);
        }
    }
}

function getRandomAssoc() {
    $db = dbConnection::getInstance();

    $sqlQuery = 'SELECT * FROM associations WHERE user_id=:user_id AND img_url IS NOT NULL  AND img_url <> "" ORDER BY RAND() LIMIT 1';
    $stmt = $db->prepare($sqlQuery);
    
    $stmt->execute([
        'user_id' => $_SESSION['id']
    ]);
    
    $randomAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

    return $randomAssoc;
}

function checkAssoc($number, $word) {
    $db = dbConnection::getInstance();

    $sqlQuery = 'SELECT * FROM associations WHERE digit = :digit AND word = :word';
    $stmt = $db->prepare($sqlQuery);
    
    $stmt->execute([
        'digit' => $number,
        'word' => $word
    ]);
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return ($result !== false);
}