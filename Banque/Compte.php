<?php




class Compte{
    private Titulaire $titulaire;
    private string $lib;
    private float $solde;
    private string $devise;


    public function __construct($titulaire, $lib, $solde, $devise){
        $this -> titulaire = $titulaire;
        $this->lib = $lib;
        $titulaire -> ajouterCompte($this);
        $this -> solde = $solde;
        $this -> devise = $devise;
    }

    public function getLib(){
        return $this->lib ;
    }

    public function getSolde(){
        return $this -> solde;
    }

    public function getDevise(){
        return $this -> devise;
    }

    public function crediter(){
        $this -> $solde += $sum;

    }

    public function debiter(){
        $this -> $solde =- $diff;

    }

    public function __toString(){
        return $this -> titulaire ." / ".$this -> lib." / ".$this -> solde." ".$this -> devise."<br>";
        
    }

    
    // public function virement($destinataire, $virement){
    //     if ($this -> solde < 0){
    //         echo "Votre solde n'est pas suffisant. Opération impossible";
    //     } else {
    //         $this -> solde =- $virement;
    //         $this -> 

    //     }
    // }

}



?>