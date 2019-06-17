<?php 
    require "app/pdo.php";

    $users = $pdo->query("SELECT * FROM users");
    $results = $users->fetchAll();
    
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Fisteaser</title>
</head>

<body>
    <img src="assets/img/logo2.jpg" style="width: 100%" alt="fisti">
   <hr>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h1>OPENING COMING SOON</h1>
                   
                    <div class="col-sm-12">
                        <div class="timer">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>