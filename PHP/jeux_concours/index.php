<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foire aux vins Colmar festival</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    session_start();
   /// require "./vendor/autoload.php";
    require "./dao/Dbconnect.php";
     require "./dao/CandidatRepository.php";
 require "./dao/DepartementRepository.php";
    require "./controllers/Ctrlmodification.php";
    require "./controllers/Ctrlaccueil.php";
    require "./controllers/Ctrlinscription.php";
    require "./controllers/Ctrlmembre.php";
    require "./controllers/Ctrlsuppression.php";
   
    
    use Dao\CandidatRepository;
    
    use Dao\DepartementRepository;
    
    if (isset($_POST["login"]) && isset($_POST["mdp"]) && !empty($_POST["login"]) && !empty($_POST["mdp"]))
    {
        $objCandidat = new CandidatRepository();
        
        $login = trim(htmlspecialchars($_POST["login"]));
        echo $_POST["mdp"];
        $data = $objCandidat->signIn($_POST["login"],$_POST["mdp"]);

        var_dump($data);

        if (count($data) > 0)
        {
            $_SESSION["id"] = $data["id_candidat"];
            $_SESSION["lastname"] = $data["nom"];
            $_SESSION["firstname"] = $data["prenom"];
            $_SESSION["age"] = $data["age"];

            header("Location:./index.php?page=membre");
        }
        else
        {
            echo "Erreur d'authentification !!";
        }


    }
    
    
    
    if (isset($_GET['page']))
    {
        $page = htmlspecialchars($_GET["page"]);
        switch ($page)
        {
            case 'accueil':

                afficherAccueil();
                break;

            case 'inscription':

                creerInscription();
                break;

            case 'modification':

                if (isset($_GET['num']) && !empty($_GET['num']))
                {
                    modifierCandidat($_GET['num']);
                }
                break;

            case 'membre':

                accesMembre();
                break;
            
            case 'suppression':

                supprimerCandidat($_GET["num"]);
                break;

            default:
                afficherAccueil();

                break;
        }
    }
    else
    {
        afficherAccueil();
    }

    //modifierCandidat(1);
    
    ?>
    <aside class="connect">
        <?php

        require "./views/login.php";

        ?>
    </aside>
</body>

</html>