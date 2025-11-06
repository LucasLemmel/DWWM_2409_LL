<?php

use Dao\CandidatRepository;
use Dao\DepartementRepository;
function modifierCandidat(int $_numCandidat)
{


    $myCandidat = new CandidatRepository();
    $data = $myCandidat->searchById($_numCandidat);
    include "./views/modification.php";


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["mail"])
        && !empty($_POST["dept"]) && !empty($_POST["age"]) && !empty($_POST["id_candidat"]))
    {
        $lastname = htmlspecialchars(trim($_POST['lastname']));
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $mail = $_POST['mail'];
        $dept = intval($_POST["dept"]);
        $age = intval($_POST["age"]);
        $id = intval($_POST["id_candidat"]);

        $nbLigne = $myCandidat->updateCandidat($lastname, $firstname, $mail, $dept, $age, $id);

        if ($nbLigne == 1)
        {
            echo"<script>window.location.href='http://localhost/DWWM_2409_LL/02-Webfront/PHP/jeux_concours/index.php' ;</script>";
        }
    }
}