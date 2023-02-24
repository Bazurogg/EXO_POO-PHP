<?php

include("titulaireCompte.php");


class Compte{
    private Titulaire $titulaire;
    private string $lib;
    private float $solde;
    private string $devise;


    public function __construct($titulaire, $lib, $solde, $devise){
        $this -> titulaire = $titulaire;
        $titulaire -> afficherComptesBancaires($this);
        $this -> solde = $solde;
        $this -> devise = $devise;
    }

    public function getLib(){
        return $this -> lib;
    }

    public function getSolde(){
        return $this -> solde;
    }

    public function getDevise(){
        return $this -> devise;
    }

    public function Crediter(){
        $this -> $solde += $sum;

    }

    public function Debiter(){
        $this -> $solde =- $diff;

    }
    
    public function Virement($destinataire, $virement){
        if ($this -> solde < 0);
        echo "Votre solde n'est pas suffisant. Opération impossible";
    }

}



?>