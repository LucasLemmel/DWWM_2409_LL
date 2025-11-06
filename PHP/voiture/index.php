<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test objet voiture</title>
</head>
<body>
<?PHP
    require_once("./models/Moteur.php");
    require_once("./models/Voiture.php");
    require_once("./models/VoitureDeCourse.php");

    $monMoteur = new Moteur("essence","ferrari",428,290);
    
    try 
    {
        $objVoiture = new VoitureDeCourse("rouge","ferrari","testarossa",2000,$monMoteur);
    } 
    catch(Exception $e) 
    {
        echo "". $e->getMessage() ."";
    }
 
   $chaine= $objVoiture->afficher();

   echo  $chaine."<br>";

   echo "vitesse max :".$objVoiture->calculVitesseMax() ."";
?>

</body>
</html>