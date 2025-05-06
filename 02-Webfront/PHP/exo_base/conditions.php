<?php

function isMajor(int $age): bool 
{
    return $age >= 18;
}

// Exemples d'utilisation
var_dump(isMajor(12)) . "<br>"; // retourne « false »
var_dump(isMajor(18)) . "<br>"; // retourne « true »
var_dump(isMajor(42)) . "<br>"; // retourne « true »

#---------------------------------------------------------------------------------#

function getRetired(int $age): string
{
$retraite = 60;
if ($age < $retraite && $age > 0)
{
    $anneRestante = $retraite - $age;
    return "il vous reste $anneRestante ans avant la retraite";
}
elseif($age == $retraite)
{
    return "Vous êtes à la retraite cette année";
}
elseif ($age > $retraite)
{
    $anneRestante = $age - $retraite;
    return "Vous êtes à la retraite depuis $anneRestante ans";
}
else
{
    return "Vous n’êtes pas encore né";
}
}
echo getretired(12) . "<br>";
echo getretired(60) . "<br>";
echo getretired(72) . "<br>";
echo getretired(-2) . "<br>";

#-----------------------------------------------------------------------------#

function getMax(float $a,float $b,float $c):float
{
    if ($a == $b || $a == $c || $b == $c)
    {
        return 0;
    }

    $max = max($a, $b, $c);
    
    return round($max,3);
    
}
echo getMax(66.651,50.358,35.654) . "<br>";
echo getMax(35.589,58.258,25.682) . "<br>";
echo getMax(15.482,2.586,65.791) . "<br>";
echo getMax(58.280,58.280,68.280) . "<br>";

#----------------------------------------------------------------------------------#

function capitalCity(string $pays):string
{
    $pays = strtolower($pays);

    switch ($pays)
    {
        case 'france':
            return 'Paris';
        case 'allemagne':
            return 'Berlin';
        case 'italie':
            return 'Rome';
        case 'maroc':
            return 'Rabat';
        case 'espagne':
            return 'Madrid';
        case 'portugal':
            return 'Lisbonne';
        case 'angleterre':
            return 'Londres';
        default:
            return 'Capitale inconnue';
    }
}

echo capitalCity('France') . "<br>";
echo capitalCity('allemagne') . "<br>";
echo capitalCity('italie') . "<br>";
echo capitalCity('maroc') . "<br>";
echo capitalCity('espagne') . "<br>";
echo capitalCity('portugal') . "<br>";
echo capitalCity('angleterre') . "<br>";
echo capitalCity('europe');