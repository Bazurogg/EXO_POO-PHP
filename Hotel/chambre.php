<?php

class Chambre {

    private int $numChambre;
    private int $prix;
    private bool $wifi;
    private $etat;
    private Hotel $hotel;
    private int $nbLit;


    public function __construct($hotel, $numChambre, $nbLit, $wifi, $prix, $etat){

        $this -> hotel = $hotel;
        $hotel -> ajouterChambre($this);
        $this -> numChambre = $numChambre;
        $this -> nbLit = $nbLit;
        $this -> wifi = $wifi;
        $this -> prix = $prix;
        $this -> etat = $etat;
        
    }

    public function getnumChambre() {

        return $this -> numChambre;
        
    }

    public function getnbLit() {

        return $this -> nbLit;

    }

    public function getPrix() {

        return $this -> prix;

    }
    
    public function getWifi() {

        // condition check true ou false avec if pour savoir si le wifi est disponible ou pas
    
    }

    public function chambreInfos(){

        return "Chambre : " .$this -> numChambre." (".$this -> nbLit." lits - ".$this -> prix." €";
    }
    
    
}



?>