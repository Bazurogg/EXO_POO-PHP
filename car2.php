<?php
class Voiture {
    private string $marque;
    private string $modele;


    public function __construct(string $marque, string $modele){
        $this -> marque = $marque;
        $this -> modele = $modele;

    }

    public function getInfos(){
        return $this -> marque ." ".$this -> modele;
    }
}

class VoitureElec extends Voiture{
    private int $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie){
        parent::__construct($marque, $modele);
        $this -> autonomie = $autonomie;
    }

    public function getInfos(){
        return parent::getInfos() ." ".$this -> autonomie;
    }
}

?>