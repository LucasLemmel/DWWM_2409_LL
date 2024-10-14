// See https://aka.ms/new-console-template for more information
Console.WriteLine("Intervalle entre 2 nombres");

//VARIABLE

int A;
int B;
string saisieUtilisateur;

//TRAITEMENT

Console.WriteLine("Saisir le premier nombre:");
saisieUtilisateur = Console.ReadLine();
A = int.Parse(saisieUtilisateur);

Console.WriteLine("Saisir le dexième nombre:");
saisieUtilisateur = Console.ReadLine();
B = int.Parse(saisieUtilisateur);

//AFFICHAGE

if (A < B)
{
    Console.Write("Résultat = ");
    for (int i = A + 1; i < B; i++)
    {
        Console.Write(i + " ");
    }
}
else if (A > B)
{
    Console.Write("Résultat = ");
    for (int i = A - 1; i > B; i--)
    {
        Console.Write(i+" ");
    }
}
else
{
    Console.Write("Résultat = Aucun nombre");
}