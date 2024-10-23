// See https://aka.ms/new-console-template for more information
using System.Text.RegularExpressions;

Console.WriteLine("Rechercher le nombre d’occurences d’une lettre dans une phrase");

//VARIABLE

int compteur = 0;
string phrase;
char lettre;
string regexPoint;

//TRAITEMENT

regexPoint = "[^.]$";
Console.WriteLine("Saisir une phrase et terminer par '.'");
phrase = Console.ReadLine();

if (phrase == "" || phrase == "." || Regex.IsMatch(phrase,regexPoint))
{
    Console.WriteLine("La chaine est vide");
}
else
{
    Console.WriteLine("\nSaisir une lettre à rechercher");
    lettre = Console.ReadKey().KeyChar;

    char[] tableau = phrase.ToCharArray();

    foreach (char c in tableau)
    {
        if (c == lettre)
        {
            compteur += 1;
        }
    }
    if (compteur > 0)
    {
        Console.WriteLine("\nLa lettre " + lettre +" apparait " + compteur + " fois dans la phrase.");
    }
    else
    {
        Console.WriteLine("\nLa lettre n’est pas présente");
    }
}
