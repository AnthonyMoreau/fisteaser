<?php
    require "app/app.php";
    $_SESSION['errors'] = [];
    if(!empty($_POST)){
        if(!empty($_POST['name']) and !empty($_POST['email'])){
            if(empty($_POST['news'])){
                
                $_POST['news'] = 'off';
            }
            //Instance de PDO
            require_once "app/pdo.php";
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $mail = $pdo->prepare("SELECT * FROM users WHERE mail= ?");
            $mail->execute([$_POST['email']]);
            $mails = $mail->fetchAll();
            if(empty($mails)){
                // si le mail n'est pas utiliser on prepare et on execute la requete pdo
                $req = $pdo->prepare("INSERT INTO users SET name= ?, mail= ?, news= ?");
                $req->execute([$_POST['name'], $_POST['email'], $_POST['news']]);
                $_SESSION['errors'][] = 'Vous avez bien été inscrit';
            } else {
                $_SESSION['errors'][] = "Cet Email est déjà utilisé, veuillez choisir un autre Email !";
            }
        } else {
            $_SESSION['errors'][] = "Votre Email n'est pas valide";
        }
        } else {

            $_SESSION['errors'][] = "Veuillez remplir tous les champs";
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
    <main>
            <img src="assets/img/LOGO.png" alt="fisti">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

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

                    <div class="col">
                        <div class="timer">
                            <p></p>
                        </div>
                    </div>
                    <div class="row"> 
                       <div class="col d-md-none d-lg-block"></div>
                        <div class="col news">
                            <p>S'inscrire à la newsletter</p>
                            
                            <form action="#" method="POST">
                                <input type="text" name="name" placeholder="Prénom" required>
                                <input type="email" name="email" placeholder="Email"required>
                                <label for="news">Recevoir la newsletter</label>
                                <input type="checkbox" name="news" checked>

                                <p>
                                    <input type="submit" value="Envoyer">
                                </p>
                            </form>
                            <span>
                                <?php
                                    foreach($_SESSION['errors'] as $error){
                                        echo $error;
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="col d-md-none d-lg-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="jdg">
            <a href="https://www.youtube.com/user/joueurdugrenier"><img src="assets/img/bando_jdg.png" alt="jdg"></a>
            
        </div>
        <div class="copyrigth">
                Copyright &copy; 2019 web15 academy.
                <p>
               <a href="https://www.cnil.fr/fr/rgpd-par-ou-commencer">Règlement général sur la protection des données</a> 
               </p>
            </div>

    </footer>
    <script src="assets/js/main.js"></script>

</body>

</html>