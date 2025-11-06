<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/**
 * affiche "hello word !"

*/
function helloWorld(): void
{
    echo "<p>Hello World</p>";
}

// test de la fonction (la fonction affiche directement le résultat)
helloWorld();


/**
 * Retourne "Hello $name !"
 * @param string $name le nom à afficher
 */
function hello(string $name):string
{
    
    if($name == "")
    {
        return "<p>Nobody</p>";
    }
    return "<p>Hello $name</p>";
   
    
}

//test de la fonction (la fonction n'affiche rien. "echo" affichera la valeur retournée par la fonction)
echo hello("Lucas");
echo hello("");

?>
    
</body>
</html>
