<?php
            session_start();
?>

<script>
 var typeRecupere = <?php echo json_encode($_GET["acces"]); ?>;
</script>

<?php if(!isset($_GET["acces"])){
    header('Location: page_de_garde.php');
    exit();
}
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
            <h2 id="titre">Back'Stage</h2>
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
                            <a class="nav-link" href="#two">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#three">Politique de confidentialité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#three">Réseaux sociaux</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <br>
    </header>


    <div class="d-flex justify-content-center">
        <div class="col-md-x">
            <h1 class="center">Connexion</h1>
            <form action="principal.php" method="post">
            <div class="colonne">
                <label for="login" class=""> Entrez votre email :</label>
                <input type="Login" id="Login" name="Login" class="Login" required>
            </div>
            <div class="colonne">
                <label for="password"> Entrez votre mot de passe :</label>
                <input type="pass" id="pass" name="pass" class="pass" required>
            </div>
            <br>
            <br>
                <div class="bouton">
                    <input type="submit" name="Connexion" class="btn btn-primary">
                </div>
                <br>
                <div class="">
                    <a href="" class="mdpPosition">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
    </div>
    <footer></footer>




    <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="projet.js"></script>

</body>

</html>