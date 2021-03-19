<?php
            session_start();
?>


<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
            <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="styleprojet.css">
            <title>Back'Stage</title>
        </head>

        <body>
            <header class="header" id="top">
                <div class="headerheight">
                    <img src="assets/img/back'stage.PNG" alt="" />
                    <h2>Back'Stage</h2>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light borderB">
                        <a class="navbar-brand" href="#">Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#two">Candidatures</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#three">Comptes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#four">Entreprises</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#five">Offres</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <br>
            </header>


            <div class="d-flex justify-content-center">
                <div class="col-md-x">
                    <h1 class="center">Créer un compte</h1>
                    
                    <form action="" method="post">
                    <div class="colonne">
                        <label for="login" class=""> Entrez votre prénom :</label>
                        <input type="prenom" id="prenom" name="prenom" class="prenom" required>
                    </div>
                    <div class="colonne">
                        <label for="login" class=""> Entrez votre nom :</label>
                        <input type="nom" id="nom" name="nom" class="nom" required>
                    </div>
                    <div class="colonne">
                        <label for="login" class=""> Entrez votre type :</label>
                        <input type="type" id="type" name="type" class="type" required>
                    </div>
                    <div class="colonne">
                        <label for="password"> Entrez votre centre :</label>
                        <input type="centre" id="centre" name="centre" class="centre" required>
                    </div>
                    <div class="colonne">
                        <label for="login" class=""> Entrez votre promotion :</label>
                        <input type="promotion" id="promotion" name="promotion" class="promotion" required>
                    </div>
                    <div class="colonne">
                        <label for="login" class=""> Entrez votre login :</label>
                        <input type="login" id="login" name="login" class="login" required>
                    </div>
                    <div class="colonne">
                        <label for="login" class=""> Entrez votre mot de passe :</label>
                        <input type="pass" id="pass" name="pass" class="pass" required>
                    </div>
                    <br>
                    <br>
                        <div class="bouton">
                            <input type="submit" name="Envoyer" class="btn btn-primary">
                        </div>
                    </form>   
                    <?php
                        if (isset($_POST['Envoyer']))
                        {
                            $servername = 'localhost';
                            $username = 'root';
                            $passwordbdd = 'password';

                            $db = new PDO("mysql:host=$servername;dbname=projetweb", $username, $passwordbdd);

                            $prenom = $_POST['prenom'];
                            $nom = $_POST['nom'];
                            $type = $_POST['type'];
                            $centre = $_POST['centre'];
                            $promotion = $_POST['promotion'];
                            $login = $_POST['login'];
                            $pass = $_POST['pass'];
            
                                $pass = password_hash($pass, PASSWORD_DEFAULT);
                                $sql = "INSERT INTO personne (Prenom, Nom, Id_Type, Id_Centre, Id_Promotion) VALUES ('$prenom', '$nom', '$type', '$centre', '$promotion')";
                                $sql = "INSERT INTO authentification (Login, Mdp) VALUES ('$login','$pass')";
                                $req = $db->prepare($sql);
                                $req->execute();
                                echo "<script>alert(\"la personne a été crée ! \")</script>";
                
                            if ($req->rowCount() > 0)
                            {
                                

                                
                            }
                            else
                            {
                                echo "<script>alert(\"Impossible de créer cette personne ! \")</script>";
                            }
                        }
                        session_destroy ();
                    ?>
                                
                </div>
            </div>
            <br>
            <footer class="footer1">
                <a href="page_de_garde.html">Accueil |</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header">Présentation |</a>
                <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Conditions Générales d'Utilisation |</a>
                <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Politique de confidentialité |</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header">Cookies |</a>
                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header">Mentions Légales |</a>
                <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Contact |</a>
                <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Réseaux Sociaux </a>
            </footer>



            <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>