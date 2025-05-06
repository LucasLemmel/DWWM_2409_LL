<?php

function  getToday() 
{
    $date = new DateTime('now');
    $date2 = $date->format('d-m-Y');
    return $date2;
}

echo getToday();

#-----------------------------------------------------------------------------#
