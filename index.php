<?php
    require "app/pdo.php";
    require "app/app.php";

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
    <img src="assets/img/LOGO.png" alt="fisti">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h1>OPENING COMING SOON</h1>

                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col jours">
                                    <h6></h6>
                                    <p>Jours</p>
                                </div>
                                <div class="col heures">
                                    <h6></h6>
                                    <p>Heure</p>
                                </div>
                                <div class="col minutes">
                                    <h6></h6>
                                    <p>Minutes</p>
                                </div>
                                <div class="col secondes">
                                    <h6></h6>
                                    <p>Secondes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>

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
    <script src="assets/js/main.js"></script>

</body>

</html>