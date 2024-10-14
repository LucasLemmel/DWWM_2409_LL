// See https://aka.ms/new-console-template for more information
Console.WriteLine("Rechercher un nombre dans un tableau");

//VARIABLE

int[] tableau = { 8, 16, 32, 64, 128, 256, 512 };
int nbre;
string saisieUtilisateur;
int i;
bool nbreTrouver = false;

//TRAITEMENT

Console.WriteLine("Saisir un nombre");
saisieUtilisateur = Console.ReadLine();
nbre = int.Parse(saisieUtilisateur);

//AFFICHAGE

for (i = 0; i < tableau.Length; i++)
{
    if (nbre == tableau[i])
    {
        Console.WriteLine("Votre nombre est à l'indice n°"+i+" du tableau");
        nbreTrouver = true;
    }
}
if (!nbreTrouver)
    {
        Console.WriteLine("Nombre non trouvé");
    }