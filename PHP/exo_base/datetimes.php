<?php

function  getToday() 
{
    $date = new DateTime('now');
    $date2 = $date->format('d/m/Y');
    return $date2;
}

echo getToday();

#-----------------------------------------------------------------------------#
function getTimeLeft(string $chaineDate): string
{
    $retour = '';
    try {
        $objDate = new DateTime($chaineDate);

        $datejour= new DateTime('now');
        if ($objDate > $datejour) {
            $interval = $objDate->diff($datejour);
            $retour = "Date futur dans : " . $interval -> format('%R%Y  années , %m mois , %d jours');
           
        }elseif($datejour->format("Y-m-d") == $objDate->format("Y-m-d"))
        {
            $retour = "Aujourd'hui";
        }
        else
        {
            $retour = ' Évènement passé';
        }
    } catch (Exception $e) {
        $retour = "Date incohérente !";
    }
    return $retour;
}

echo getTimeLeft("2027-02-23");
echo getTimeLeft("2025-05-12");
echo getTimeLeft("2025-05-11");
echo getTimeLeft("2025-02-32");
