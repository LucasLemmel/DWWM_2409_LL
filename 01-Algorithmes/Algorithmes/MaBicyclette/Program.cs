// See https://aka.ms/new-console-template for more information
using System.ComponentModel.Design;

Console.WriteLine("Ma bicyclette");

//VARIABLE

Boolean ilFaitBeau;
Boolean bicycletteEnBonneEtat;
Boolean reparationsImediates;
Boolean possedeGOTMaison;
Boolean possedeGOTBibliotheque;


//TRAITEMENT

Console.WriteLine("Est ce qu'il fait beau ?");
ilFaitBeau = Boolean.Parse(Console.ReadLine());

if (ilFaitBeau)
{
    Console.WriteLine("Est ce que ma bicyclette est en bonne état ?");
    bicycletteEnBonneEtat = Boolean.Parse(Console.ReadLine());

    if (bicycletteEnBonneEtat)
    {
        Console.WriteLine("j’irai faire une balade à bicyclette");
    }
    else
    {
        Console.WriteLine("je passerai chez le garagiste avant la balade");
        Console.WriteLine("Est ce que les réparations sont immédiates ?");
        reparationsImediates = Boolean.Parse(Console.ReadLine());

        if(reparationsImediates)
        {
            Console.WriteLine("j’irai faire une balade à bicyclette");
        }
        else
        {
            Console.WriteLine("j’irai à pied jusqu’à l’étang pour cueillir les joncs");
        }
    }
}
else
{
    Console.WriteLine("je consacrerai ma journée à la lecture");
    Console.WriteLine("Est ce que j'ai le 1er tome de Game of Thrones ?");
    possedeGOTMaison = Boolean.Parse(Console.ReadLine());
    
    if (possedeGOTMaison)
    {
        Console.WriteLine("je m’installerai confortablement dans un fauteuil et je me plongerai dans la lecture");
    }
    else
    {
        Console.WriteLine("j’irai à la bibliothèque municipale");
        Console.WriteLine("Est ce que la bibliothèque a le 1er tome de Game of Thrones ?");
        possedeGOTBibliotheque = Boolean.Parse(Console.ReadLine());

        if (possedeGOTBibliotheque)
        {
            Console.WriteLine("J’irai l’emprunter à la bibliothèque municipale");
            Console.WriteLine("je m’installerai confortablement dans un fauteuil et je me plongerai dans la lecture");
        }
        else
        {
            Console.WriteLine(" j’emprunterai un roman policier");
        }
    }
}


