<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Back'Stage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Evaluer_entreprise.css">

</head>

<body>

    <header class="header" id="top">
        <div class="headerheight">
            <img src="assets/img/back'stage.PNG" alt="" />
            <h2 id="titre">Back'Stage</h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light borderB">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="page_de_garde.php">Accueil<span class="sr-only">(current)</span></a>
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
            <div id="we">
                <a href="page_de_garde.php">Déconnexion</a>
            </div>
        </div>
        <br>

    </header>
    <h1>Evaluer une Entreprise</h1>

    <form class="">

        <div class="rangement">

            <div class="">
                <label for="nom" class="">Nom de l'entreprise :</label>
                <div class="">
                    <input type="text" class="txtEntreprise" id="nom" NAME="nom" VALUE="">
                </div>
            </div>

            <div id="rhalis" class="rating">

                <a href="#5" title="Donner 5 étoiles">☆</a>

                <a href="#4" title="Donner 4 étoiles">☆</a>

                <a href="#3" title="Donner 3 étoiles">☆</a>

                <a href="#2" title="Donner 2 étoiles">☆</a>

                <a href="#1" title="Donner 1 étoile">☆</a>

            </div>

            <div class="">
                <label for="commentaire" class="col-3-7 col-form-label">Commentaire (Falcutatif):
                </label>
                <div class="">
                    <textarea class="form-control" id="commentaire" NAME="commentaire"></textarea>
                </div>
            </div>
            <br />
            <div class="">
                <div class="">
                    <input type="submit" value="Evaluer l'entreprise">
                </div>
            </div>

        </div>
    </form>


    <footer class="footer1">
        <a href="page_de_garde.html">Accueil |</a>
        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header">Présentation |</a>
        <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Conditions Générales d'Utilisation |</a>
        <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Contact |</a>
        <a href="https://fontawesome.com/icons/linkedin-in?style=brands">Réseaux Sociaux </a>
    </footer>

    <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>