// See https://aka.ms/new-console-template for more information
Console.WriteLine("Controler la saisie");

//VARIABLE

string prenom;

//TRAITEMENT

Console.WriteLine("Veuillez saisir votre prénom");
prenom = Console.ReadLine();

//AFFICHAGE

while(prenom.Length < 2)
{
    Console.WriteLine("Veuillez saisir un vrai prénom");
    prenom = Console.ReadLine();
}
Console.WriteLine("Bonjour "+prenom);