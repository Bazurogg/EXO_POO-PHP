<?php

class Personne {

    private string $_prenom;
    private string $_nom;
    private array $_resa;

    
    public function __construct($prenom, $nom){
        
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        $this -> _resa = [];
        
    }
    
    public function setPrenom($prenom) {

        $this -> _prenom = $prenom;
    }

    public function setNom($nom) {

        $this -> _nom = $nom;
    }

    public function getPrenom() {
        
        return $this -> _prenom;
    
    }
    
    public function getNom() {

        return $this -> _nom;

    }

    public function ajouterResa(Resa $resa) {
        $this -> _resa[] = $resa;
    }

    public function afficherResa() {

        echo "<h4>Réservations de " . $this -> getPrenom() . " " . strtoupper($this -> getNom()) . "</h4>";

        echo '<span class="badge badge-success">' . count($this -> _resa) . ' RÉSERVATIONS</span>';

        foreach ($this -> _resa as $resa) {
            echo "<p><strong>Hotel : " . $resa -> getChambre() -> getHotel() -> getNomHotel() . $resa -> getChambre() -> getHotel() -> getEtoiles() . $resa -> getChambre() -> getHotel() -> getVille() . "</strong> / " . "<span> Chambre N° </span>" . $resa -> getChambre() -> getNumChambre() . " ( " . $resa -> getChambre() -> getNbLit() . " lits - " . $resa -> getChambre() -> getPrix() . " € - Wifi : " . $resa -> getChambre() -> dispoWifiClient() . " ) du " . $resa -> getDateDebut() . " au " . $resa -> getDateFin() ."</p>";
        }

        echo "<p>Total : " . $this -> PrixTotalResa() . " €</p>";

    }


    public function PrixTotalResa() {

        $prixTotal = 0;

        foreach ($this -> _resa as $resa){

            $prixTotal += $resa -> getChambre() -> getPrix() * $resa -> getNbJour();
        }

        return $prixTotal;
        
    }

    public function __toString() {

        return $this -> getPrenom() . " " . strtoupper($this -> getNom());

    }

}

?>