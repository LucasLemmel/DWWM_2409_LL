// See https://aka.ms/new-console-template for more information
using System.Text.RegularExpressions;

Console.WriteLine("Palindrome");

//VARIABLE

string palindrome;
string[] palindromeInverser;
string regexPoint;

//TRAITEMENT

Console.WriteLine("Saisir un palindrome et terminer par un '.'");
palindrome = Console.ReadLine();

regexPoint = "[^.]$";

while (Regex.IsMatch(palindrome, regexPoint))
{
    Console.WriteLine("Saisie incorrect");
    Console.WriteLine("Entrez un palindrome valide et terminer par un '.'");
    palindrome = Console.ReadLine();
}