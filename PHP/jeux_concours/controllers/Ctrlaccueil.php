<?php
use Dao\CandidatRepository;

function afficherAccueil()
{
    $objCandidat = new CandidatRepository();

    $tabData = $objCandidat->searchAll();
    $nomCol = $objCandidat->getFieldName();

    require "./views/accueil.php";
}