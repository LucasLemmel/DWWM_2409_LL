// See https://aka.ms/new-console-template for more information
Console.WriteLine("Recherche des diviseur d'un nombre");

//VARIABLE

int nbre;
string saisieUtilisateur;

//TRAITEMENT

Console.WriteLine("Saisir un nombre:");
saisieUtilisateur = Console.ReadLine();
nbre = int.Parse(saisieUtilisateur);

//AFFICHAGE
Console.Write(nbre + " est divisible par ");
for (int i = 2; i < nbre; i++)
{
    if (nbre % i == 0)
    {
        Console.Write(i+" ");
    }
}