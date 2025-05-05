<?php

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];

function firstItem(array $tab)
{
    if (empty($tab)) {
        return null;
    }
    else 
    {
        return $tab[0];
    }
}

echo firstItem($names);