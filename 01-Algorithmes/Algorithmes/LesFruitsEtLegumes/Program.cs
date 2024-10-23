// See https://aka.ms/new-console-template for more information
using System.Security.Cryptography.X509Certificates;

Console.WriteLine("Les fruits et légumes");


//VARIABLE


List<string> listeLegumes = new List<string>();
string nomLegume;
double prixLegume;
string legume;
string saisieGo;



do
{
    Console.WriteLine("Saisissez le nom du légume : ");
    nomLegume = Console.ReadLine() ?? "";

    Console.WriteLine("Saisissez le prix du légume : ");
    prixLegume = Console.Read();

    Console.WriteLine("Saisissez go pour avoir la liste : ");
    saisieGo = Console.ReadLine();

    legume = "1 kilogramme de "+nomLegume+" coute "+prixLegume+" euros";
    listeLegumes.Add(legume);
} while (saisieGo != "go" || saisieGo != "GO");

foreach (string s in listeLegumes)
{
    Console.WriteLine(s);
}
