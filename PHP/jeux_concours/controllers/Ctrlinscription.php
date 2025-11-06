<?php

use Dao\CandidatRepository;
use Dao\DepartementRepository;
function creerInscription()
{
    if (isset($_POST["inscription"]))
    {
        if ($_POST["mdp"] == $_POST["confirm"])
        {
            $myCandidat = new CandidatRepository();
            $pass = $_POST["mdp"];
            $test = $myCandidat->CreateCandidat(htmlspecialchars($_POST["lastname"]), htmlspecialchars($_POST["firstname"]), $_POST["mail"], $pass, intval($_POST["dept"]), intval($_POST["age"]));
            if ($test == true)
            {
                $_SESSION["user"] = $_POST["lastname"];
                header('Location: ./index.php?page=accueil');
            }
        }
        else
        {
            echo "Les mots de passe doivent être identiques";
        }
    }
   include "./views/inscription.php";
}
