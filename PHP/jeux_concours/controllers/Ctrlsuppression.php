<?php

use Dao\CandidatRepository;

function supprimerCandidat(int $_id)
{
    //require "./dao/CandidatRepository.php";

    $objCandidat = new CandidatRepository();

    $nbLigne = $objCandidat->deleteCandidat(intval($_id));
    if ($nbLigne == 1)
    {
        header("Location: ./index.php?page=accueil");
    }
    else
    {
        header("Location: ./index.php?page=membre&num=".$_id);
    }


    
}