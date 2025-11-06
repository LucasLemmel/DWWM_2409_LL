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

$result = firstItem($names); 
echo $result."<br>"; 

$emptyTab = [];
$result = firstItem($emptyTab);
var_dump($result);

#---------------------------------------------------------------------#

function lastItem(array $tab2)
{
    if(empty($tab2)) {
        return null;
    } else{
        return $tab2[4];
    }
}

$result2 = lastItem($names);
echo $result2."<br>";

$empTab2 = [];
$result2 = lastItem($empTab2);
var_dump($result2);

#------------------------------------------------------------------------#

function sortItems(array $tab3): array
{
    if(empty($tab3) && count($tab3) == 1) 
    {
        return [];
    }
    else
    {
        rsort($tab3,SORT_NATURAL);
        return $tab3;

    }
    
}

$tab3 = sortItems($names);
var_export($tab3);

$tabNb = [5,6,2,9,35];

$tabNb = sortItems($tabNb);
var_export($tabNb);

$test = sortItems([]);
var_export($test);

#-------------------------------------------------------------------------------#

function stringItems(array $tab4): string
{
    if(empty($tab4) && count($tab4) == 1) 
    {
        return "Nothing to display";
    }
    else
    {
        sort($tab4,SORT_NATURAL);

        $chaineTab = "[ ";

        for ($i=0; $i <=count($tab4)-1 ; $i++)
        { 
            $chaineTab.= $tab4[$i].", ";
        }

        $chaineTab = substr($chaineTab,0,strlen($chaineTab)-2);
        $chaineTab.=" ]";
        return $chaineTab;

    }
}

echo stringItems($names);
echo stringItems($tabNb);