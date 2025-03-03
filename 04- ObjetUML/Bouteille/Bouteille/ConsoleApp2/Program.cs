// See https://aka.ms/new-console-template for more information
using ClassLibraryBouteille;


Bouteille b;
b = new Bouteille();

b = new Bouteille(3f,2f,true);

b = new Bouteille(0.5f, 0.25f);

Bouteille clone = new Bouteille(b);

bool ok = b.Ouvrir();
bool ok1 = b.Fermer();
bool ok2 = b.RemplirTout();