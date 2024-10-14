// See https://aka.ms/new-console-template for more information
Console.WriteLine("Exercice tableau dynamique");

List<string> utilisateurs = new List<string>();
string saisieNomPrenom;
char saisieOuiNon;
DateTime dateDeNaissance = Convert.ToDateTime(dpt.Value);
DateTime aujourdhui = DateTime.now;


do
{
    Console.WriteLine("Saisissez votre nom et prénom : ");
    saisieNomPrenom = Console.ReadLine() ?? "";

    Console.WriteLine("Saisissez votre date de naissance : ");
    saisieDateDeNaissance = Console.Read();

    utilisateurs.Add(saisieNomPrenom);


    Console.WriteLine("Souhaitez vous ajouter un autre utilisateur ? (N/O)");

    saisieOuiNon = Console.ReadKey(true).KeyChar;

} while (saisieOuiNon == 'o' || saisieOuiNon == 'O');