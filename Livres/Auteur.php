<?php


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
        echo "<h3>Livres de " . $this->prenom . " " . $this->nom . " :"."</h3>";
        foreach($this->livres as $livre) {
          echo "_ " . $livre . "<br>";
        }
    }
}

?>