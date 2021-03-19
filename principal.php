<?php
session_start();

$servername = 'localhost';
$username = 'root';
$passwordbdd = 'password';

if (isset($_POST['Connexion'])) {
    $login = $_POST['Login'];
    $pass = $_POST['pass'];
    $BDDpass;

    $passhash = password_hash($pass, PASSWORD_DEFAULT);

    $db = new PDO("mysql:host=$servername;dbname=projetweb", $username, "");


    $sql = "SELECT * FROM authentification WHERE Login = '$login'";

    $result = $db->prepare($sql);
    $result->execute();
    if ($BDDpass = $result->fetch()) {
        $data = $BDDpass['Mdp'];
        if (password_verify($pass, $data)) {
        } else {
            if(strcmp(substr($_SERVER['HTTP_REFERER'], -9,5),"acces")==0){
                header('location:'. $_SERVER['HTTP_REFERER']."&err=2");
        }
            else{
                header('location:'. substr($_SERVER['HTTP_REFERER'], -26,20)."&err=2");
            }
        }

        //$_SESSION['email'] = $email;
        //echo "vous vous êtes connecté sous le compte :  $email  ";
    } else {
        //header('location: projet.php?acces=');
        if(strcmp(substr($_SERVER['HTTP_REFERER'], -9,5),"acces")==0){
            header('location:'. $_SERVER['HTTP_REFERER']."&err=1");
        }
            else{
                header('location:'. substr($_SERVER['HTTP_REFERER'], -26,20)."&err=1");
            }

    }$result->closeCursor();
}
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Back'Stage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="principal.css">
</head>

<body>
    <header>
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
        </div>
        <h1 class="text-center">Bienvenue <?php
                                            $_SESSION['Login'] = $login;

                                            echo " $login  ";
                                            ?></h1>


    </header>

    <main class="container separate">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-xl-5 case">
                <div class="dess">
                    <ul>
                        <h2>Gérer les comptes</h2>
                        <li class="cacher"><a>Rechercher</a></li>
                        <li><a>Créer</a></li>
                        <li><a>Modifier</a></li>
                        <li><a>Supprimer</a></li>
                        <li><a>Assigner des droits</a></li>
                        <li><a>Consulter les statistiques</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-1 col-xl-1 case">
            </div>
            <div class="col-sm-12 col-md-5 col-xl-5 case">

                <ul>
                    <h2>Gérer les entreprises</h2>
                    <li><a>Rechercher</a></li>
                    <li><a>Créer</a></li>
                    <li><a>Modifier</a></li>
                    <li><a>Supprimer</a></li>
                    <li><a>Evaluer</a></li>
                    <li><a>Consulter les statistiques</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5 col-xl-5 case">

                <ul>
                    <h2>Gérer les candidatures</h2>
                    <li><a>Wish-List</a></li>
                    <li><a>Candidatures</a></li>
                    <li><a>Avancement</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-1 col-xl-1 case">
            </div>
            <div class="col-sm-12 col-md-5 col-xl-5 case">

                <ul>
                    <h2>Gérer les offres</h2>
                    <li><a>Rechercher</a></li>
                    <li><a>Créer</a></li>
                    <li><a>Modifier</a></li>
                    <li><a>Supprimer</a></li>
                    <li><a>Consulter les statistiques</a></li>
                </ul>
            </div>

        </div>
    </main>



    <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="page_de_garde.js"></script>
</body>

</html>