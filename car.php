<?php

class Car {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private string $vitesse;
    private bool $contact;

    public function setMarque($marque){
        $this -> marque = $marque;
    }

    public function setModele($modele){
        $this -> modele = $modele;
    }

    public function setNbPortes($nbportes){
        $this -> nbportes = $nbportes;
    }

    public function setVitesse($vitesse){
        $this -> vitesse = $vitesse;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }
    
    public function demarrer() {
        if ($this->contact) {
            echo "La voiture est déjà allumée.<br>";
        } else {
            $this->contact = true;
            echo "La voiture démarre.<br>";
        }
    }

    public function eteindre() {
        if ($this->contact) {
            $this->contact = false;
            echo "La voiture s'éteint.<br>";
        } else {
            echo "La voiture est déjà éteinte.<br>";
        }
    }

    public function getMarque(){
        return $this -> marque;
    }

    public function getModele(){
        return $this -> modele;
    }

    public function getNbPortes(){
        return $this -> nbportes;
    }
    
    public function getVitesse(){
        return $this -> vitesse;
    }

    public function __toString(){
        $etat = $this -> contact ? "est démarée":"est éteinte";
        return "Marque et modéle du véhicule : " . $this->marque." ". $this->modele."<br>"."Nombres de portes : ". $this->nbportes."<br>". $etat ."<br>". $this->vitesse ." Km / h."."<br>";

    //     if ($this->contact) {
    //         return "La voiture est allumée.<br>";
    //     } else {
    //         return "La voiture est éteinte.<br>";
    //     }
    }

}

?>