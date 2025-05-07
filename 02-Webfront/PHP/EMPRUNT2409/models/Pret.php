
<?php

Class Pret 
{
    // attributs
    private float $capital;
    private float $tauxMensuel;
    private $nbMois;


    // propriétés
    // accesseur
    public function getCapital():float
    {
        return $this -> capital;
    }

    public function getTauxMensuel():float
    {
        return $this -> tauxMensuel;
    }

    public function getNbMois():float
    {
        return $this -> nbMois;
    }

    public function setNbMois(int $nbNouvMois):float
    {
        $this -> nbMois = $nbNouvMois;
    }

    //Constructeur
    public function __construct(float $_montant, float $_tauxAnnuel, float $_nbAnnees)
    {
        $this -> capital = $_montant;
        $this -> tauxMensuel = $_tauxAnnuel/1200;
        $this -> nbMois = $_nbAnnees*12;
    }

    // methodes
    /*  Q= (1-(1+ Tm )puissance -n)
        a : la mensualité constante recherché :
        a= (K x Tm)/Q   */

        
    public function calculMensualite ():float
    {
        $Q = (1 - pow((1 + $this -> tauxMensuel), - $this -> nbMois));
        $mensualite = ($this -> capital * $this -> tauxMensuel ) / $Q;
        return round($mensualite,2);
    }

    public function calculMensualite2():string
    {
        $Q= (1- pow((1+$this->tauxMensuel),-$this->nbMois));
        $mensualite= ($this->capital*$this->tauxMensuel )/$Q;
        return number_format($mensualite,2,","," "). " €";
    }

    public function getTableauAmortissement():array
    {
        $data = array();
        $partInteret = 0;
        $partAmortissement = 0;
        $mensualite = $this -> calculMensualite();
        $capitalRestant = $this -> capital;
        for ($i = 0; $i < $this -> nbMois; $i++) 
        {
            $partInteret = $capitalRestant * $this ->tauxMensuel;
            $partAmortissement = $mensualite - $partInteret;
            if ($i > 0) 
            {
                $capitalRestant -= $partAmortissement;
            }
            $numeroMois = $i++;
            array_push($data ,  ["num_mois" => $numeroMois,"partInteret" => round($partInteret,2),"partAmortissement" => round($partAmortissement,2),"capitalRestant" => round($capitalRestant,2),"mensualite" => round($mensualite,2)]);

        }
        return $data;
    }
}