<?php

function getMC2(string $name):string
{  
    //$tabnom= explode(" ", $name);

    //$nom= $tabnom[1];
    //return $nom;
    return $name;
}

echo getMC2("Albert Einstein")."<br>";

#-------------------------------------------------------------------------------------#

function getUserName(string $firstName,string $lastName):string
{
    return "$firstName $lastName";
}

echo getUserName("Lucas","Lemmel")."<br>";

#----------------------------------------------------------------------------------------------#

function getFullName(string $firstName, string $lastName):string
{
    return strtolower($firstName)." ".strtoupper($lastName);
}

echo getFullName("Lucas","Lemmel")."<br>";

#--------------------------------------------------------------------------------------------#

function askUser(string $lastName, string $firstName):string
{
$personne = getFullName($firstName,$lastName);
$scientifique= getMC2("Albert Einstein");

    return "Bonjour $personne , connaissez-vous  $scientifique ?";
}

echo askUser("Lemmel","Lucas");
