<?php

class Personne {

    private string $prenom;
    private string $nom;

    public function __construct($prenom, $nom){
        
        $this -> prenom = $prenom;
        $this -> nom = $nom;

    }
    
    public function getPrenom() {
        
        return $this -> prenom;
    
    }
    
    public function getNom() {

        return $this -> nom;

    }

}

?>