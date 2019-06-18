<?php 

    $db_name = 'fisteaser';
    $db_host = '127.0.0.1';
    $db_admin = 'admin';
    $db_pass = 'plop';

    $pdo = new PDO ("mysql:dbname={$db_name};host={$db_host}", $db_admin, $db_pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 

?>