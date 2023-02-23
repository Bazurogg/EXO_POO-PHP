<?php

class Car {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesse = 0;
    private bool $contact = false;


    public function setMarque($marque){
        $this -> marque = $marque;
    }

    public function setModele($modele){
        $this -> modele = $modele;
    }
    
    public function setNbPortes($nbportes){
        $this -> nbPortes = $nbportes;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }

    public function accelerer($vitesseAcceleration){
        if ($this->contact == false){
            echo "Pour accélerer, il faut démarrer le véhicule ".$this -> marque." ".$this -> modele.".<br>";
            } 
        else {
            $this -> vitesse +=  $vitesseAcceleration;
            // $this -> vitesse =  $this -> vitesse + $vitesseAcceleration;
            echo "le Véhicule ".$this -> getMarque()." ".$this -> getModele()." accélére de : ".$vitesseAcceleration." Km / h."."<br>";
            }
    }
    
    public function ralentir($vitesseFrein){
        if ($this->vitesse < $vitesseFrein){
            echo "Le véhicule ".$this -> marque." ".$this -> modele." ne peut pas ralentir de plus que sa vitesse actuelle."."<br>";
            } 
        else {
            $this -> vitesse = $this -> vitesse - $vitesseFrein;
            echo "le Véhicule ".$this -> getMarque()." ".$this -> getModele()." ralentis de : ".$vitesseFrein." Km / h."."<br>";
            }
    }

    public function demarrer() {
        if ($this->contact == true) {
            echo "Le véhicule ".$this -> marque." ".$this -> modele." est déjà en marche."."<br>";
        } else {
            echo "Le véhicule " .$this -> marque." ".$this -> modele." démarre."."<br>";
            $this->contact = true;
        }
    }
    
    public function stopper() {
        if ($this->contact == false) {
            echo "Le véhicule ".$this -> marque." ".$this -> modele." est déjà arrêté."."<br>";
        } else {
            $this->contact = false;
            echo "Le véhicule ".$this -> marque." ".$this -> modele." est stoppé."."<br>";
        }
    }

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
    public function Contact(){
        return $statut = $this -> contact ? "Le véhicule ". $this -> marque." "."est démarré.":"Le véhicule ". $this -> marque." "."est à l'arrêt.";
        // L'opérateur ternaire "?" est un opérateur conditionnel. Il effectue une comparaison ou vérifie une condition. Structurer en 3 "opérandes", il fonctionne dans le sens de la lecture. 1/ Une condition, 2/ Une déclaration de résultat pour vrai et 3/ Une déclaration de résultat pour faux. Ces 2 déclarations sont séparées par ":".
    }
    
    public function __toString(){
        return "Marque et modéle du véhicule : " . $this -> marque." ". $this->modele."<br>"."Nombres de portes : ". $this->nbPortes."<br>". $this -> contact()."<br>"."Sa vitesse actuelle est de : ".$this->vitesse." Km / h."."<br>";
    }

}
