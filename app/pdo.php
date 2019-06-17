<?php 

    $pdo = new PDO ('mysql:dbname=fisteaser;host=fisteaser', 'admin', 'plop');

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

?>