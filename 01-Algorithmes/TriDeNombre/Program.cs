// See https://aka.ms/new-console-template for more information
using LLemmelTools;
Console.WriteLine("Hello, World!");

//VARIABLES

int A = ConsoleTools.DemanderNombreEntier("Entez le premier nombre");
int B = ConsoleTools.DemanderNombreEntier("Entez le deuxième nombre");
int C = ConsoleTools.DemanderNombreEntier("Entez le troisième nombre");
int[]nombres;
string saisieUtilisateur;

//TRAITEMENT
/*
Console.WriteLine("Entrez le premier nombre");
saisieUtilisateur = Console.ReadLine();
A = int.Parse(saisieUtilisateur);

Console.WriteLine("Entrez le deuxième nombre");
saisieUtilisateur = Console.ReadLine();
B = int.Parse(saisieUtilisateur);

Console.WriteLine("Entrez le troisième nombre");
saisieUtilisateur = Console.ReadLine();
C = int.Parse(saisieUtilisateur);
*/

nombres = [A,B,C];

Array.Sort(nombres);

//AFFICHAGE

for (int i = 0;i < nombres.Length;i++)
{
    Console.WriteLine(nombres[i]);
}
Console.ReadLine();
