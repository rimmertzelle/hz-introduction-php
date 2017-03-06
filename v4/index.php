<?php

require_once 'helper_functions.php';
require_once 'Video.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=learningpath', 'root', 'root');
} catch (PDOException $e){
    die('Could not connect.' . $e->getMessage());
}

$query = $pdo->prepare('select * from videos');

$query->execute();

$videos = $query->fetchAll(PDO::FETCH_OBJ); //check dd to see what happened

//$videos = $query->fetchAll(PDO::FETCH_CLASS, 'Video');

//dd($query->fetchAll(PDO::FETCH_OBJ));

//dd($videos);

require 'index.view.php';

?>
