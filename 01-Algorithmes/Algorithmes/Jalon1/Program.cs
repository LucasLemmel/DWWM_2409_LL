// See https://aka.ms/new-console-template for more information
Console.WriteLine("Jalon n°1: Algorithme de validation de carte");


//VARIABLE
string nomCarte = "";
string[] utilisateur = {"lucas","lores","jérome","allan","karan"};
int[] arg = {0,50,10,40,23};
int prixRepas = 4;
int recharge;
int i;
bool nomValide = false;
char manger;
char remplir;
int argent = 0;

//TRAITEMENT

do
{
    Console.WriteLine("Saisir le nom qui apparait sur la carte :");
    nomCarte = Console.ReadLine();
    for (i = 0; i < utilisateur.Length; i++)
    {
       if(nomCarte == utilisateur[i])
        {
            nomValide = true;
            argent = arg[i];
        }
        else
        {
            Console.WriteLine("Le nom " + nomCarte + " n'est pas dans la base de donné.");
        }
        
    }
    
} while (!nomValide);

if (argent >= prixRepas)
{
    Console.WriteLine("Voulez vous un repas ? (o)ou(n)");
    manger = Console.ReadKey().KeyChar;

    if (manger == 'o')
    {
        arg[i] = arg[i] - prixRepas;
        Console.WriteLine("\nVous pouvez récupérer votre repas!! Bon appétit !!");
    }
    else if(manger == 'n')
    {
        Console.WriteLine("Au revoir !!");
    }
}
else
{
    Console.WriteLine("Vous n'avais pas assez d'argent sur votre carte !!");
    Console.WriteLine("Voulez vous la recharger ? (o)ou(n)");
    remplir = Console.ReadKey().KeyChar;

    if (remplir == 'o')
    {
        Console.WriteLine("\nDe combien voulez vous la recharger ?");
        recharge = Console.Read();

        argent = recharge;
    }
    else if (remplir == 'n')
    {
        Console.WriteLine("Au revoir !!");
    }
}

    //Console.WriteLine("Le nom "+ nomCarte +" n'est pas dans la base de donné.");
    //nomValide = false;
 /*if (nomCarte == utilisateur[i])
        {
            nomValide = true;
            if (arg[i] > prixRepas)
            {
                arg[i] = arg[i] - prixRepas;
                Console.WriteLine("Vous pouvez récupérer votre repas!! Bon appétit !!");
            }
            else
            {
                Console.WriteLine("Vous devez recharger votre carte!!");
                Console.WriteLine("De combien voulez vous la recharger ?");
                recharge = Console.Read();

                arg[i] = recharge;

                arg[i] = arg[i] - prixRepas;
                Console.WriteLine("Vous pouvez récupérer votre repas!! Bon appétit !!");
            }
            

        }*/