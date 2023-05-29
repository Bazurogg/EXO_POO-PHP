<?php

class Hotel {

    private string $nomHotel;
    private string $adresseHotel;
    private string $ville;
    private array $chambres;
    private array $resa;

    public function __construct($nomHotel, $ville, $adresseHotel){

        $this -> nomHotel = $nomHotel;

        $this -> adresseHotel = $adresseHotel;

        $this -> chambres = array ();
        
    }

    public function getNomHotel() {

        return $this -> nomHotel;

    }
    
    public function getVille() {

        return $this -> ville;

    }


    public function getAdresseHotel() {

        return $this -> adresseHotel;

    }


    
    public function ajouterChambre(Chambre $chambre) {
        
        $this -> chambres [] = $chambre;
    
    }

    
    
}
















?>