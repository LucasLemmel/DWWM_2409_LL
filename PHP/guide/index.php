<?php

require "./dao/Dbconnect.php";
require "./dao/RestoRepository.php";

$dbconnect= Dbconnect::getInstance();
var_dump($dbconnect);


$objResto = new RestoRepository();

 var_export($objResto->searchById(2));
