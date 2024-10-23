// See https://aka.ms/new-console-template for more information
Console.WriteLine("Es tu majeur");

//VARIABLE

int age;
string saisieUtilisateur;

//TRAITEMENT

Console.WriteLine("Entrez votre age");
saisieUtilisateur = Console.ReadLine();
age = int.Parse(saisieUtilisateur);

//AFFICHAGE

if (age >= 18)
{
    Console.WriteLine("Vous êtes majeur");
}
else if (age < 18 & age >= 0)
{
    Console.WriteLine("Vous êtes mineur");
}
else
{
    Console.WriteLine("Vous n'êtes pas encore né");
}