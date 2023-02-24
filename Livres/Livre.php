<?php

include("auteur.php");

class Livre {
    private  Auteur $auteur;
    private string $titre;
    private int $parution;
    private int $nbdepages;
    private int $prix;

    public function __construct($auteur, $titre, $parution, $nbdepages, $prix){
        $this -> auteur = $auteur;
        $auteur -> ajouterLivre($this);
        $this -> titre = $titre;
        $this -> parution = $parution;
        $this -> nbdepages = $nbdepages;
        $this -> prix = $prix;
    }

    public function getAuteur() {
        return $this -> auteur;
    }

    public function getTitre() {
        return $this -> titre;
    }

    public function getParution() {
        return $this -> parution;
    }
    
    public function getNbdepages() {
        return $this -> nbdepages;
    }
    
    public function getPrix() {
        return $this -> prix;
    }
    
    public function __toString(){
        return $this -> titre ."(".$this -> parution.")"." : ".$this -> nbdepages." pages "."/ ".$this -> prix. " €."."<br>";
        
    }
}

?>