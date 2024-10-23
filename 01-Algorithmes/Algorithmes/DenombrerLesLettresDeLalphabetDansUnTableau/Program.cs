// See https://aka.ms/new-console-template for more information
Console.WriteLine("Dénombrer les lettres de l’alphabet dans un tableau");


//VARIABLE

int compteur = 0;
string phrase;
char[] lettreAlphabet = {'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q',
    'r','s','t','u','v','w','x','y','z','à','â','é','è','ê','ë','î','ï','ô','ù','û','ü'};

//TRAITEMENT

do
{
    Console.WriteLine("Saisir un texte d'au moin 120 caractères");
    phrase = Console.ReadLine().ToLower();
    
}
while (phrase.Length < 120);

for (int i = 0; i < lettreAlphabet.Length; i++)
{
    foreach (char c in phrase)
    {
        if (c == lettreAlphabet[i])
        {
            compteur += 1;
        }
    }
    if (compteur > 0)
    {
        Console.WriteLine("Votre phrase contient " + compteur + " lettre(s) " + lettreAlphabet[i] + ".");
    }
    compteur = 0;
}