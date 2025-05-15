<?php

Class Moteur
{
    private string $carburant;
    private string $marque;
    private int $puissance;
    private int $vitesseMax;


    public function getcarburant(): string
    {
        return $this->carburant;
    }

    public function getmarque(): string
    {
        return $this->marque;
    }

    public function getpuissance(): int
    {
        return $this->puissance;
    }

    public function getvitesseMax(): int
    {
        return $this->vitesseMax;
    }

    public function setpuissance(int $newPuissance): void
    {
        $this->puissance = $newPuissance;
    }


    public function __construct(string $_carburant, string $_marque, int $_puissance, int $_vitesseMax)
    {
        $this->carburant = $_carburant;
        $this->marque = $_marque;
        $this->puissance = $_puissance;
        $this->vitesseMax = $_vitesseMax;
    }

    public function afficherMoteur(): string
    {
        $afficherMoteur = "moteur de la marque: $this->marque qui consomme: $this->carburant avec une puissance égale à: $this->puissance  chevaux et une vitesse max de: $this->vitesseMax km/h";
        return $afficherMoteur;
    }
}