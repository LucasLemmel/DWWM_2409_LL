<?php

Class Voiture
{
    //Attributs
    protected string $couleur;
    protected string $marque;
    protected string $modele;
    protected float $poidsEnKg;
    protected Moteur $moteur;

    public function getcouleur(): string
    {
        return $this->couleur;
    }

    public function getmarque(): string
    {
        return $this->marque;
    }

    public function getmodele(): string
    {
        return $this->modele;
    }

    public function getmoteur(): Moteur
    {
        return $this->moteur;
    }
    
    public function getpoidsEnKg():float
    {
        return $this->poidsEnKg;
    }

    public function setcouleur(string $newCouleur): void
    {
        $this->couleur = $newCouleur;
    }

    public function setmodele(string $newModele): void
    {
        $this->modele = $newModele;
    }

    public function setmoteur(Moteur $newMoteur): void
    {
        $this->moteur = $newMoteur;
    }




    //constructeur composition de la classe voiture et classe moteur
    // public function __construct(string $_couleur, string $_marque, string $_modele, float $_poidsEnKg,string $_carburant,string $_marqueMoteur,int $_puissance, int $_vitesseMax)
    // {
    //     $this->couleur = $_couleur;
    //     $this->marque = $_marque;
    //     $this->modele = $_modele;
    //     $this->poidsEnKg = $_poidsEnKg;
    //     $this->moteur = new Moteur($_carburant, $_marqueMoteur, $_puissance, $_vitesseMax);
    // }




    //constructeur pour l'agregation de la classe voiture et classe moteur

    public function __construct(string $_couleur, string $_marque, string $_modele, float $_poidsEnKg, Moteur $_moteur)
    {
        $this->couleur = $_couleur;
        $this->marque = $_marque;
        $this->modele = $_modele;
        $this->poidsEnKg = $_poidsEnKg;
        $this->moteur = $_moteur;
    }



    public function afficher(): string
    {
        $chaine = "voiture de couleur: $this->couleur de marque: $this->marque de modele: $this->modele avec un ".$this->moteur->afficherMoteur()." poids de la voiture: $this->poidsEnKg";
        return $chaine;
    }

    public function calculVitesseMax(): float
    {
        $vitesseMaxVoiture = $this->moteur->getvitesseMax() - ($this->poidsEnKg * 0.3);
        return $vitesseMaxVoiture;
    }
}