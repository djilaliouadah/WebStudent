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
            <div id="we">
        <a href="page_de_garde.php">Déconnexion</a>
    </div>
        </div>
        <br>
        
    </header>

    

        <h1> Statistiques Entreprise </h1>

        <br />

<div class="container">

        <form class="">

<div class="form-group row">
    <label for="periode" class="">Etendue de la période d'analyse avant ce jour en mois :</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="periode" NAME="periode" VALUE="">
    </div>
</div>

<div class="form-group row">
<label for="nombre" class="">Nombre d'offres postées en moyenne par les entreprises : 
</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="nombre" NAME="nombre" VALUE="">
    </div>
    </div>

    <div class="form-group row">
<label for="offre" class="">Entreprise qui a posté le plus d'offres :  </label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="offre" NAME="offre" VALUE="">
    </div>
    </div>

    
    <div class="form-group row">
<label for="moyenne" class="">Nombre moyen d'étudiants du CESI pris par les entreprises : </label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="moyenne" NAME="moyenne" VALUE="">
    </div>
    </div>

    
    <div class="form-group row">
<label for="nbEtudiant" class="">Entreprise qui a pris le plus d'étudiant du CESI :</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="nbEtudiant" NAME="nbEtudiant" VALUE="">
    </div>
    </div>

    
    <div class="form-group row">
<label for="topEtu" class="">Meilleure note moyenne des entreprises attribuées par les étudiants :
</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="topEtu" NAME="topEtu" VALUE="">
    </div>
    </div>

    <div class="form-group row">
<label for="topPil" class="">Meilleure note moyenne des entreprises attribuées par les pilotes :
</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="topPil" NAME="topPil" VALUE="" placeholder="Entrer la compétence">
    </div>
    </div>
    
    <div class="form-group row">
<label for="competence" class="">Nombre entreprise proposant cette compétence :</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="competence" NAME="competence" VALUE="">
    </div>
    </div>
</form>

</div>
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