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
if ($age < $retraite) 
{
    $anneRestante = $retraite - $age;
    return "il vous reste $anneRestante ans avant la retraite";
}
elseif($age = $retraite)
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
echo getretired(12) . PHP_EOL;
echo getretired(60) . PHP_EOL;
echo getretired(72) . PHP_EOL;
echo getretired(-2) . PHP_EOL;

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
echo getMax(66.651,50.358,35.654) . PHP_EOL;
echo getMax(35.589,58.258,25.682) . PHP_EOL;
echo getMax(15.482,2.586,65.791) . PHP_EOL;
echo getMax(58.280,58.280,68.280) . PHP_EOL;

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

echo capitalCity('France') . PHP_EOL;
echo capitalCity('allemagne') . PHP_EOL;
echo capitalCity('italie') . PHP_EOL;
echo capitalCity('maroc') . PHP_EOL;
echo capitalCity('espagne') . PHP_EOL;
echo capitalCity('portugal') . PHP_EOL;
echo capitalCity('angleterre') . PHP_EOL;
echo capitalCity('europe');