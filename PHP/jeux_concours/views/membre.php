<?php

if (isset($_SESSION["lastname"]) && isset($_SESSION["firstname"]) && isset($_SESSION["age"]))
{
    echo " Bonjour M.(e) ". $_SESSION[ "firstname"]." ".$_SESSION["lastname"]." votre age est de :".$_SESSION["age"]. " Vous êtes  autorisé à gérer votre compte.";  

    echo"<a href='index.php?page=modification&num=".$_SESSION["id"]."' target='_self'>Modifier votre compte</a>";
    
    echo "<a href='index.php?page=suppression&num=".$_SESSION["id"]."' target='_self'>Supprimer votre compte</a>";
}
else
{
    echo "Vous n'êtes pas autorisé à accéder à cette espace !";
}

?>