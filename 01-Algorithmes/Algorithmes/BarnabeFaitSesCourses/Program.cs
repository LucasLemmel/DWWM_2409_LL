// See https://aka.ms/new-console-template for more information
Console.WriteLine("Barnabé fait ses courses");

//VARIABLE

string saisieUtilisateur;
int sommeDepart;
double depense;
int magasin = 0;

//TRAITEMENT

Console.WriteLine("Saisir une somme de départ supérieur a 1");
saisieUtilisateur = Console.ReadLine();
sommeDepart = int.Parse(saisieUtilisateur);

depense = (double)sommeDepart;

if (depense > 1)
{
    
    while (depense > 1)
    {
        depense = depense / 2 - 1;
        magasin = magasin + 1;
    }
}
else
{
    Console.WriteLine("Vous devez saisir une somme supérieure à 1");
}
Console.WriteLine("Barnabé a fait ses courses dans " + magasin + " magasin(s).");