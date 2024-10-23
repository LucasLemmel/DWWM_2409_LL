// See https://aka.ms/new-console-template for more information
using System.Reflection;
Console.WriteLine("Controler la saisie avec limite");

//VARIABLE

string mdp = "";
int i = 0;
//TRAITEMENT

    while (i < 3 && mdp != "formation")
    {
        Console.WriteLine("Veuillez saisir le mot de passe");
        mdp = Console.ReadLine();
        i++;
       
        if (mdp == "formation")
        {
            Console.WriteLine("Vous êtes connecté");
        }
        else if (i == 3)
        {
            Console.WriteLine("Votre compte est bloqué");
        }
        else
        {
            Console.WriteLine("Mot de passe incorrect");
        }
    }