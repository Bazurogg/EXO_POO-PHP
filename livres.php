<?php
class Livre {
    private  Auteur $auteur;
    private string $titre;
    private int $parution;
    private int $nbdepages;
    private int $prix;

    public function __construct($auteur, $titre, $parution, $nbdepages, $prix){
        $this -> auteur = $auteur;
        $auteur->ajouterLivre($this);
        $this -> titre = $titre;
        $this -> parution = $parution;
        $this -> nbdepages = $nbdepages;
        $this -> prix =$prix;
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
        return $this -> titre ."(".$this -> parution.")"." de ".$this -> auteur." : ".$this -> nbdepages." pages "."/ ".$this -> prix. " €."."<br>";
        
    }
}

class Auteur {
    private string $prenom;
    private string $nom;
    private array $livres;

    public function __construct($prenom, $nom){
        $this -> prenom = $prenom;
        $this -> nom = $nom;
        $this -> livres = array();
    }

    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function getLivres() {
        return $this->livres;
    }
    
    public function __toString(){
        return $this -> prenom ." ".$this -> nom;       
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres [] = $livre;
    }

    // "array_push()" est une fonction qui ajoute un ou plusieurs éléments à la "FIN" d'un tableau.(On utilisera "_unshift() pour le mettre au "DEBUT".)
    // Sa structure ce compose de 2 paramètres : en 1er le tableau sur lequel on souhaite ajouter des éléments et en 2éme le ou les éléments que l'on souhaite ajouter.

    public function afficherBibliographie() {
        echo "Livres de " . $this->prenom . " " . $this->nom . " :"."<br>";
        foreach($this->livres as $livre) {
          echo "_ " . $livre . "<br>";
        }
    }
}
?>