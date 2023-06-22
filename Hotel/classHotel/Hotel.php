<?php

class Hotel {

    private string $_nomHotel;
    private string $_etoiles;
    private string $_adresseHotel;
    private string $_cp;
    private string $_ville;
    private int $_nbChambres;
    private array $_chambres;
    private array $_resa;

    public function __construct($nomHotel, $etoiles, $adresseHotel, $cp, $ville, $nbChambres) {

        $this -> _nomHotel = $nomHotel;

        $this -> _etoiles = $etoiles;

        $this -> _adresseHotel = $adresseHotel;
        
        $this -> _cp = $cp;

        $this -> _ville = $ville;

        $this -> _nbChambres = $nbChambres;

        $this -> _chambres = [];

        $this -> _resa = [];
        
    }

    public function setNomHotel($nomHotel){
        return $this -> _nomHotel = $nomHotel;

    }

    public function setAdresseHotel($adresseHotel){
        $this -> _adresseHotel = $adresseHotel;
    }

    public function setEtoiles($etoiles){
        $this -> _etoiles = $etoiles;
    }

    
    public function setCp($cp) {
        $this -> _cp = $cp;
    }
    
    public function setVille($ville){
        $this -> _ville = $ville;
    }
    
    public function setNbChambres($nbChambres) {
        $this -> _nbChambres = $nbChambres;
    }

    public function getNomHotel() {

        return $this -> _nomHotel;

    }

    public function getEtoiles() {

        return $this -> _etoiles;

    }
      
    public function getAdresseHotel() {
        
        return $this -> _adresseHotel;
        
    }
    
    public function getCp() {
        
        return $this -> _cp;
        
    }
    
    public function getVille() {

        return $this -> _ville;

    }
    
    public function getChambres() {

        return $this -> _chambres;

    }
    
    public function getNbChambres() {

        return $this -> _nbChambres;

    }
    
    public function ajouterChambre(Chambre $chambre) {
        
        $this -> _chambres [] = $chambre;
    
    }

    public function getResa()
    {
        return $this -> _resa = [];
    }

    public function afficherChambres() {
        foreach ($this -> _chambres as $chambres){
            echo $chambres; 
        }
    }
    
    public function ajouterResa(Resa $resa){
        $this -> _resa[] = $resa;
        
    }
    
    public function nbResa(){
        return count($this -> _resa);
    }
    
    public function afficherResa(){

        echo "<h3>Réservation de l'hotel : " . $this -> getNomHotel() . $this -> getEtoiles() . $this -> getVille() . "</h3>";

        if ($this -> _resa) {
            echo '<span class="badge badge-success">' . count($this -> _resa) . ' RÉSERVATIONS TOTALE</span>';

            foreach ($this -> _resa as $resa) {
                echo  $resa;
            } 
        } else {
            echo "<p>Aucune réservation !</p>";
        }

    }

    public function annulationResa(Resa $resa) {

        if ($key = array_search($resa, $this -> _resa) !== false ){

            $resa -> getChambre() -> setDispo(true); 

            unset ($this -> _resa[$key]);
        }

    }

    public function nbChambresDispo(){
        $nbChambres = count($this -> _chambres) - count($this -> _resa);
        return $nbChambres;
    }

    public function afficherRecapHotel(){
       echo "<h4>Statuts des chambres de <strong>" .$this -> getNomHotel() . $this -> getEtoiles() . $this -> getVille() . "</strong></h4>";
       echo '<table class="table table-striped"><thead class="thead-light"><tr><th>CHAMBRE</th><th>PRIX</th><th>WIFI</th><th>ETAT</th></tr></thead></tbody>';
       foreach ($this -> _chambres as $chambre) {
        echo "<tr><td>" . $chambre -> getnumChambre() . "</td><td>" . $chambre -> getprix() . " €</td><td>" . $chambre -> dispoWifi() . "</td><td>" . $chambre -> dispoChambre() . "</td></tr>";
       }
       echo "</tbody></table>";
    }
    
    public function __toString()
    {
        return "<h4><strong>" . $this -> getNomHotel() . $this -> getEtoiles() . $this -> getVille() . "</strong></h4><p>" . $this -> getAdresseHotel() . " " . $this -> getCp() . " " . strtoupper($this -> getVille()) . "</p><p>Nombre de chambres : " . $this -> getNbChambres() . "</p><p> Nombre de chambres reservées : " . $this -> nbResa() . "</p><p>Nombre de chambres dispo : " . $this -> nbChambresDispo() . "</p>"; 
    }
}

?>