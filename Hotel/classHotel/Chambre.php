<?php

class Chambre {

    private Hotel $_hotel;
    private string $_numChambre;
    private float $_prix;
    private bool $_wifi;
    private bool $_dispo;
    private int $_nbLit;
    private array $_resa;

    public function __construct(Hotel $hotel, $numChambre, $nbLit, $wifi, $prix) {

        $hotel -> ajouterChambre($this);
        $this -> _hotel = $hotel;
        $this -> _numChambre = $numChambre;
        $this -> _nbLit = $nbLit;
        $this -> _wifi = $wifi;
        $this -> _prix = $prix;
        $this -> _dispo = true;
        $this -> _resa = [];
        
    }
    
    public function setNumChambre($numChambre) {

        $this -> _numChambre = $numChambre;

    }
    
    public function setNbLit($nbLit) {

        $this -> _nbLit = $nbLit;

    }

    public function setWifi($wifi) {

        $this -> _wifi = $wifi;

    }

    public function setPrix($prix) {
        $this->_prix = $prix;

    }
    
    public function setDispo($dispo) {

        $this->_dispo = $dispo;

    }

    public function getNumChambre() {

        return $this -> _numChambre;
        
    }

    public function getNbLit() {

        return $this -> _nbLit;

    }

    public function getPrix() {

        return $this -> _prix;

    }
    
    public function getWifi() {

        return $this -> _wifi;

    }

    public function getDispo() {

        return $this -> _dispo;

    }

    public function getHotel() {

        return $this -> _hotel;

    }
    
    public function dispoWifi() {

        if ($this -> getWifi() == true) {
            return '<i class="fa-solid fa-wifi fa-fade" style="color: #000000;"></i>';
        } else {
            return "";
        }
    }
    
    public function dispoWifiClient() {

        if ($this -> getWifi() == true) {
            return "oui";
        } else {
            return "non";
        }
    }

    public function dispoChambre() { // Switch affichage de la pastille selon la disponibilité des chambres.
        if ($this -> getDispo() == true) {
            return '<span class="badge badge-success">DISPONIBLE</span>';    
        } else {
            return '<span class="badge badge-danger">RÉSERVÉE</span>';
        }
    }

    public function ajouterResa(Resa $resa){
        $this -> _resa[] = $resa;
        if ($this -> getDispo() == true) {
            $this -> _dispo = false;
        }
        
    }

    public function __toString() {

        return $this -> getNumChambre(); 
        
    }

}

?>