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
        $this -> nbPortes = $nbportes;
    }

    public function setVitesse($vitesse){
        $this -> vitesse = $vitesse;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }
    
    // public function demarrer() {
    //     if ($this->contact) {
    //         echo "La voiture est déjà allumée.<br>";
    //     } else {
    //         $this->contact = true;
    //         echo "La voiture démarre.<br>";
    //     }
    // }

    // public function eteindre() {
    //     if ($this->contact) {
    //         $this->contact = false;
    //         echo "La voiture s'éteint.<br>";
    //     } else {
    //         echo "La voiture est déjà éteinte.<br>";
    //     }
    // }

    public function getMarque(){
        return $this -> marque;
    }

    public function getModele(){
        return $this -> modele;
    }

    public function getNbPortes(){
        return $this -> nbPortes;
    }
    
    public function getVitesse(){
        return $this -> vitesse;
    }

    public function __toString(){
        $statut = $this -> contact ? "Le véhicule ". $this -> marque." "."est démarré.":"Le véhicule ". $this -> marque." "."est à l'arrêt.";
        // L'opérateur ternaire "?" est un opérateur conditionnel. Il effectue une comparaison ou vérifie une condition. Structurer en 3 "opérandes", il fonctionne dans le sens de la lecture. 1/ Une condition, 2/ Une déclaration de résultat pour vrai et 3/ Une déclaration de résultat pour faux. Ces 2 déclarations sont séparées par ":".
        return "Marque et modéle du véhicule : " . $this -> marque." ". $this->modele."<br>"."Nombres de portes : ". $this->nbPortes."<br>". $statut ."<br>". "Sa vitesse actuelle est de : ".$this->vitesse ." Km / h."."<br>";
    }

}

?>