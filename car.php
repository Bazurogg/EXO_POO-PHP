<?php

class Car {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private $demarrer;

    public function setMarque($marque){
        $this -> marque = $marque;
    }

    public function setModele($modele){
        $this -> modele = $modele;
    }

    public function setNbPortes($nbportes){
        $this -> nbportes = $nbportes;
    }

    public function setVitesseActuelle($vitesseactuelle){
        $this -> vitesssactuelle = $vitesseactuelle;
    }

    public function setDemarrer($demarrer){
        $this -> demarrer = $demarrer;
    }

    public function turnOn() {
        if ($this->demarrer) {
            $this->demarrer = true;
            echo "Voiture démarrée";
        } else {
            echo "Voiture déjà en marche";
        }
    }

    public function turnOff() {
        if ($this->demarrer) {
            $this->demarrer = false;
            echo "Arrêt voiture";
        } else {
            echo "Voiture déjà arrétée";
        }
    }

    public function demarrer(){
        return $this -> demarrer;
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
    

    public function __toString()
    {
        return $this->marque." ". $this->modele." ". $this->nbportes." portes.". $this->demarrer."<br>";
    }


}







?>