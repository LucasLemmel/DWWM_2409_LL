// See https://aka.ms/new-console-template for more information
Console.WriteLine("Hello, World!");

//VARIABLES

int A;
int B;
int C;
int[]nombres;
string saisieUtilisateur;

//TRAITEMENT

Console.WriteLine("Entrez le premier nombre");
saisieUtilisateur = Console.ReadLine();
A = int.Parse(saisieUtilisateur);

Console.WriteLine("Entrez le deuxième nombre");
saisieUtilisateur = Console.ReadLine();
B = int.Parse(saisieUtilisateur);

Console.WriteLine("Entrez le troisième nombre");
saisieUtilisateur = Console.ReadLine();
C = int.Parse(saisieUtilisateur);

nombres = [A,B,C];

Array.Sort(nombres);

//AFFICHAGE

for (int i = 0;i < nombres.Length;i++)
{
    Console.WriteLine(nombres[i]);
}
Console.ReadLine();
