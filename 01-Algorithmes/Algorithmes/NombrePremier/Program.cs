// See https://aka.ms/new-console-template for more information
Console.WriteLine("Nombre premier");

//VARIABLE

int nbre;
int compteur = 0;
string saisieUtilisateur;

//TRAITEMENT

Console.WriteLine("Saisir un nombre");
saisieUtilisateur = Console.ReadLine();
nbre = int.Parse(saisieUtilisateur);

//AFFICHAGE

for(int i = 2;i < nbre; i++)
{
    if(nbre % i == 0)
    {
        compteur = compteur + 1;
    }
}
if(compteur == 0)
{
    Console.WriteLine("Le nombre " + nbre + " est un nombre premier");
}
else
{
    Console.WriteLine("Le nombre " + nbre + " n'est pas un nombre premier");
}