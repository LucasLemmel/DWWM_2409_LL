<?php

Class VoitureDeCourse extends Voiture
{
    #[\Override]
    public function calculVitesseMax(): float
    {
        $vitesseMaxVoiture = $this->moteur->getvitesseMax() - ($this->poidsEnKg * 0.05);
        return $vitesseMaxVoiture;
    }

    public function __construct(string $_couleur, string $_marque, string $_modele, float $_poidsEnKg, Moteur $_moteur)
    {
        parent::__construct($_couleur, $_marque, $_modele, $_poidsEnKg, $_moteur);
        if($_moteur->getmarque() !=$this->marque)
        {
            throw new Exception($message = "La voiture et le moteur doivent etre de la même marque");
        }
    }  
}