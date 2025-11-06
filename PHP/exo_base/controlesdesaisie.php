<?php

function stringLength(string $saisie):bool
{
    $pattern = "a{9,}";
     preg_match($pattern, $saisie);
}