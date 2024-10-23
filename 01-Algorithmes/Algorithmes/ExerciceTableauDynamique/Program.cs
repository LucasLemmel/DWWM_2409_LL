// See https://aka.ms/new-console-template for more information
Console.WriteLine("Exercice tableau dynamique");


//VARIABLE


List<string> utilisateurs = new List<string>();
string saisieNomPrenom;
ConsoleKey saisieOuiNon;
DateOnly dateDeNaissance;
DateTime aujourdhui = DateTime.Now;
int age;
string majeurMineur;
string[] utilisateur = new string[4];
string ages;

//TRAITEMENT


do
{
    Console.WriteLine("Saisissez votre nom et prénom : ");
    saisieNomPrenom = Console.ReadLine() ?? "";


    Console.WriteLine("Saisissez votre date de naissance (dd/mm/yy) : ");
    dateDeNaissance = DateOnly.Parse(Console.ReadLine());


    age = aujourdhui.Year - dateDeNaissance.Year;
    

    if(aujourdhui.Month < dateDeNaissance.Month || aujourdhui.Day < dateDeNaissance.Day && aujourdhui.Month == dateDeNaissance.Month)
    {
        age -= 1;
    }


    if(age >= 18)
    {
        Console.WriteLine("Saisir votre métier :");
        majeurMineur = Console.ReadLine();
    }
    else
    {
        Console.WriteLine("Saisir votre couleur préférée :");
        majeurMineur = Console.ReadLine();
    }


    utilisateur[0] = saisieNomPrenom;
    utilisateur[1] = dateDeNaissance.ToLongDateString();
    utilisateur[2] = age.ToString()+" ans";
    utilisateur[3] = majeurMineur + Environment.NewLine;
    
    for(int i = 0; i < utilisateur.Length; i++)
    {
        utilisateurs.Add(utilisateur[i]);
    }


    Console.WriteLine("Souhaitez vous ajouter un autre utilisateur ? (N/O)");
    Console.WriteLine();

    saisieOuiNon = Console.ReadKey(true).Key;


} while (saisieOuiNon == ConsoleKey.O);

foreach(string s in utilisateurs)
    {
        Console.WriteLine(s);
 
    }

