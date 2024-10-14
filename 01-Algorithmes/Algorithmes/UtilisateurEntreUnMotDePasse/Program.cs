// See https://aka.ms/new-console-template for more information
using System.Text.RegularExpressions;

Console.WriteLine("L'utilisateur entre un mot de passe");

//VARIABLE

string motDePasse;
string regexMinuscules;
string regexMajuscules;
string regexChiffres;
string regexCaracteresSpeciaux;

//TRAITEMENT

Console.WriteLine("Saisissez un mot de passe : ");

motDePasse = Console.ReadLine() ?? "";

regexMinuscules = "[a-z]{1,}"; // {1,} = 1 ou plusieurs

regexMajuscules = "[A-Z]+"; // + = 1 ou plusieurs

regexChiffres = "[0-9]+";

regexCaracteresSpeciaux = "[^a-zA-Z0-9]+";


if (
    Regex.IsMatch(motDePasse, regexMinuscules) &&
    Regex.IsMatch(motDePasse, regexMajuscules) &&
    Regex.IsMatch(motDePasse, regexChiffres) &&
    (Regex.IsMatch(motDePasse, regexCaracteresSpeciaux) || motDePasse.Length >= 20) &&
    motDePasse.Length >= 12 
)
{
    Console.WriteLine("Mot de passe OK");
}
else
{
    Console.WriteLine("Mot de passe trop faible !");
}