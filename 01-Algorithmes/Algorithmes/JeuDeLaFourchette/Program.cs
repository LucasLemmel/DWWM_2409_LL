// See https://aka.ms/new-console-template for more information
Console.WriteLine("Jeu");

//VARIABLE

int nbJoueur;
int nombreAtrouver;
string saisieUtilisateur;
int min = 0;
int max = 100;
int essais = 1;

//TRAITEMENT

Random random = new Random();
nombreAtrouver = random.Next(max - min + 1)+ min;

Console.WriteLine("Saisir un nombre entre "+ min +" et "+ max);
saisieUtilisateur = Console.ReadLine();
nbJoueur = int.Parse(saisieUtilisateur);

while(nbJoueur != nombreAtrouver)
{
    if(nbJoueur < nombreAtrouver)
    {
        min = nbJoueur;
        Console.WriteLine("C'est plus !!");
    }
    else if(nbJoueur > nombreAtrouver)
    {
        max = nbJoueur;
        Console.WriteLine("C'est moins !!");
    }
    Console.WriteLine("Saisir un nombre entre " + min + " et " + max);
    saisieUtilisateur = Console.ReadLine();
    nbJoueur = int.Parse(saisieUtilisateur);
    essais = essais + 1;
}
if(nbJoueur == nombreAtrouver)
{
    Console.WriteLine("Bravo vous avez trouvé en " + essais + " essais");
}