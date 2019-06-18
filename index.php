<?php
    require "app/app.php";

    if(!empty($_POST)){
        
        if(!empty($_POST['name']) and !empty($_POST['email'])){

            require_once "app/pdo.php";

            $req = $pdo->prepare("INSERT INTO users SET name= ?, mail= ?, news= ?");
            
            if(empty($_POST['news'])){

                $_POST['news'] = 'null';
            }
            
            $req->execute([$_POST['name'], $_POST['email'], $_POST['news']]);
    
        } else {
    
            echo('veuillez renplir tous les champs');
        }
    }
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
                    <div class="row">
                        <div class="col"></div>
                        <div class="col news">
                            S'inscrire à la news letter
                            <form action="#" method="POST">
                                <input type="text" name="name" placeholder="Prénom" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <label for="news">Recevoir le news letter</label>
                                <input type="checkbox" name="news" checked>
                                <p>
                                    <input type="submit" value="Envoyer">
                                </p>
                            </form>
                        </div>
                        <div class="col"></div>
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