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
            <br>
            <div class="colonne">

                <input type="text" id="nomcompte" name="nomcompte" placeholder="Nom" class="authentification-nomcompte" required>
            </div>
            <br>
            <div class="colonne">

                <input type="text" id="prenomcompte" name="prenomcompte" placeholder="Prenom" class="authentification-prenomcompte" required>
            </div>
            <br>
            <div class="colonne">

                <input type="text" id="centrecompte" name="centrecompte" placeholder="Centre" class="authentification-centrecompte" required>
            </div>
            <br>
            <div class="colonne">

                <input type="text" id="promotioncompte" name="promotioncompte" placeholder="Promotion" class="authentification-promotioncompte" required>
            </div>
            <br>
            <div class="colonne">

                <input type="text" id="rolecompte" name="rolecompte" placeholder="Role" class="authentification-rolecompte" required>
            </div>

            <br>
            <br>

            <form method="envoyer">
                <div class="bouton">
                    <input type="submit" value="Créer un compte" class="btn btn-primary">
                </div>
                <br>

            </form>
        </div>
    </div>
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