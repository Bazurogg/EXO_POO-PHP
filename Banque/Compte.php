<?php

class Compte{
    private Titulaire $titulaire;
    private string $lib;
    private float $solde;
    private string $devise;

    public function __construct($titulaire, $lib,float $solde, $devise){
        $this -> titulaire = $titulaire;
        $this->lib = $lib;
        $titulaire -> ajouterCompte($this);
        $this -> solde = round($solde, 3);
        $this -> devise = $devise;
    }

    public function getLib(){
        return $this -> lib ;
    }

    public function getSolde(){
        return $this -> solde;
    }

    public function getDevise(){
        return $this -> devise;
    }

    public function crediter($sum){
        $this -> solde += $sum;
        $date = date('Y-m-d H:i:s');
        echo $date." / ".$this -> titulaire ." Votre : "."<strong>".$this -> lib."</strong>"." a été crédité de : ". $sum ." ". $this -> devise. "<br>";

    }

    public function debiter($diff){
        $this -> solde -= $diff;
        $date = date('Y-m-d H:i:s');
        echo $date." / ".$this -> titulaire ." Votre : "."<strong>".$this -> lib."</strong>"." a été débité de : "."-". $diff ." ". $this -> devise. "<br>";

    }

    public function virement(Compte $destinataire, $montant){
        $this -> solde -= $montant;
        $destinataire -> solde += $montant;
        $date = date('Y-m-d H:i:s');
        echo $date." / ".$this -> titulaire ."Votre virement de : " . $montant . " " . $this -> devise . " Du : " ."<strong>".$this -> lib."</strong>". " vers le : "."<strong>".$destinataire -> lib."</strong>". " a bien été effectué."."<br>";
 
    }

    public function __toString(){
        $decimal = strlen(substr(strrchr($this->solde, "."), 1));
        $formatted_solde = number_format($this->solde, $decimal, '.', ' ');

        return $this -> titulaire ." / ".$this -> lib." / ".$formatted_solde." ".$this -> devise."<br>";        
    }
}

?>