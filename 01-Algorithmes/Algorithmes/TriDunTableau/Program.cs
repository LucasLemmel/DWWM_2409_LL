// See https://aka.ms/new-console-template for more information
Console.WriteLine("Tri d'un tableau");

//VARIABLE

int[] tableau = { 128, 64, 8, 512, 16, 32, 256 };
int indice;
int temp;

//TRAITEMENT

Console.WriteLine();
Console.Write("Tableau : ");
foreach (int element in tableau)
{
    Console.Write(element + " ");
}
Console.WriteLine();

indice = 0;
for (int j = 0; j < tableau.Length - 1; j++)
{
    indice = j;
    for (int i = j; i < tableau.Length; i++)
    {
        if (tableau[indice] > tableau[i])
        {
            indice = i;
        }
    }
    temp = tableau[indice];
    tableau[indice] = tableau[j];
    tableau[j] = temp;
    temp = 0;

    //AFFICHAGE

   
} 
Console.WriteLine();
Console.Write("Tableau trier : ");
foreach (int element in tableau)
{
    Console.Write(element + " ");
}
Console.WriteLine();






