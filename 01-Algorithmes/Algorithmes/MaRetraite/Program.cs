// See https://aka.ms/new-console-template for more information
Console.WriteLine("Ma retraite");

//VARIABLE

int age;
string saisieUtilisateur;

//TRAITEMENT

Console.WriteLine("Entrez votre age");
saisieUtilisateur = Console.ReadLine();
age = int.Parse(saisieUtilisateur);

//AFFICHAGE

if(age == 60)
{
    Console.WriteLine("C’est le moment de prendre sa retraite");
}
else if(age >= 0 & age < 60)
{
    Console.WriteLine("Il vous reste "+(60 - age)+" années avant la retraite");
}
else if (age > 60)
{
    Console.WriteLine("Vous êtes à la retraite depuis " + (age - 60) + " années");
}
else
{
    Console.WriteLine("La valeur fournie n’est pas un âge valide");
}