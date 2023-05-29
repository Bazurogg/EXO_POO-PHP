<?php

include("hotel.php");

class Chambre {

    private Hotel $hotel;
    private int $numChambre;
    private int $prix;
    private bool $wifi=false;
    private $etat;
    private int $nbLit;
    private int $reservations;


    public function __construct($hotel, $numChambre, $nbLit, $wifi, $prix, $etat){

        $hotel -> ajouterChambre($this);
        $this -> numChambre = $numChambre;
        $this -> nbLit = $nbLit;
        $this -> wifi = $wifi;
        $this -> prix = $prix;
        $this -> etat = $etat;
        $this -> reservations=[];
        
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
        if ($this -> wifi == false){
            return "no";       
        } else {
            return "yes";
        }

    }

    public function getreservations()
    {
        return $this -> reservations;
    }

    public function set_wifi($wifi){
        $this -> wifi = $wifi;
        return $this;
    }

    public function set_numChambre($numChambre){
        $this -> numChambre = $numChambre;
        return $this;
    }

    public function set_nbLit($nbLit){
        $this -> nbLit = $nbLit;
        return $this;
    }

    public function set_prix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function set_reservation($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function getetat(){ // wip ajout d'icone pour afficher la disponibilité de la chambre
        if ($this -> etat == true){

        }else{

        }
    }

    public function ajouterReservations(Reservation $reservations){
        $this->reservations[] =$reservations;

    }

    public function afficherChambre(){
        return "Chambre: ".$this->numChambre." (".$this->nbLit." lit(s) - ".$this->prix." € - Wifi: ".$this->getwifi() .")";
    }

    public function __toString(){
        return $this->numChambre." ";  
    }
        
    
}



?>