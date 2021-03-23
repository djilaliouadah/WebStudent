<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Back'Stage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Statistique_offre.css">

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
        </div>
        <br>
    </header>

    <div id="we">
        <a href="page_de_garde.php">Déconnexion</a>
    </div>
    <center>
        <h1> Statistiques Entreprises </h1>
    </center>

    <form class="wesh">

        <div class="form-group row">
            <label for="periode" class="col-sm-7 col-form-label">Etendue de la période d'analyse avant ce jour en mois : </label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="periode" NAME="periode" VALUE="">
            </div>
        </div>

        <div class="form-group row">
            <label for="duree" class="col-sm-7 col-form-label">Moyenne du temps de mission des offres :
            </label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="duree" NAME="duree" VALUE="">
            </div>
        </div>

        <div class="form-group row">
            <label for="nbOffre" class="col-sm-7 col-form-label">Nombre totales des offres postées :</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="nbOffre" NAME="nbOffre" VALUE="">
            </div>
        </div>


        <div class="form-group row">
            <label for="competence" class="col-sm-7 col-form-label">Compétence la plus recherchée :
            </label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="competence" NAME="competence" VALUE="">
            </div>
        </div>


        <div class="form-group row">
            <label for="localisation" class="col-sm-7 col-form-label">La localisation la plus demandée :</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="localisation" NAME="localisation" VALUE="">
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