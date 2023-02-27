<?php

class Titulaire{
    
    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;
    private array $comptes;


    public function __construct($nom, $prenom, $date, $ville){
        $this -> prenom = $prenom;
        $this -> nom = $nom;
        $this -> date = new DateTime($date);
        $this -> ville = $ville;
        $this -> comptes = array();
    }


    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }

    public function __toString(){
        return $this -> prenom ." ".$this -> nom;       
    }

    public function ajouterCompte(Compte $compte) {
        $this->comptes [] = $compte;
    }

    public function afficherComptesBancaires() {
        echo "<h3>Liste comptes de " . $this->prenom . " " . $this->nom . " :"."</h3>";
        foreach($this->comptes as $compte) {
          echo "_ " . $compte . "<br>";
        }
    }

}




