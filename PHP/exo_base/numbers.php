<?php
function getSum(int $nb1,int $nb2 ):int
{
    return $nb1+$nb2;
}

echo getSum(5,3)."<br>";


function getSub(int $nb1,int $nb2 ):int
{
    return $nb1 - $nb2;
}

echo getSub(5,3);
echo getSub(3,5)."<br>";


function getMulti(float $nb1,float $nb2 ):float
{
    return round($nb1 * $nb2,2);
}
echo getMulti(5.6,3)."<br>";
echo getMulti(5.6,-3.7)."<br>";


function getDiv(int $nb1,int $nb2 ):float
{
    if($nb2 != 0)
    {
        return round($nb1/$nb2, 2);
    }
    return 0;
    
}
echo getDiv(20,3)."<br>";
echo getDiv(20,0);