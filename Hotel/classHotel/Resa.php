<?php

class Resa {

    private string $_dateDebut;
    private string $_dateFin;
    private Personne $_personne; 
    private Chambre $_chambre;
    
    public function __construct(Personne $personne, Chambre $chambre, $dateDebut, $dateFin) {

        $this -> _personne = $personne;
        $this -> _chambre= $chambre;
        $this -> _dateDebut = $dateDebut;
        $this -> _dateFin = $dateFin;
        $personne -> ajouterResa($this); // Appel de la fonction "ajoutResa de l'objet "personne".
        $chambre -> ajouterResa($this);
        $hotel = $chambre -> getHotel();
        $hotel -> ajouterResa($this);
        
    }

    public function setDateDebut($dateDebut) {

        $this -> _dateDebut = $dateDebut;

    }
    
    public function setDateFin($dateFin) {

        $this -> _dateFin = $dateFin;

    }

    public function getDateDebut() {

        return $this -> _dateDebut;

    }

    public function getDateFin() {

        return $this -> _dateFin;

    }

    public function getPersonne() {

        return $this -> _personne;

    }

    public function getChambre() {
        
        return $this -> _chambre;

    }

    public function getNbJour() { // Calcul du nb de jours total en faisant la diff entre jour 1 / dernier jour. Formatage de la date directement dans la fonction. 

        $firstDate = new DateTime($this -> getDateDebut());
        $lastDate = new DateTime($this -> getDateFin());

        if ($this -> getDateDebut() == $this -> getDateFin()) { // Location pour une journée

            return 1;

        } else {

            $diffJour = $firstDate -> diff($lastDate) -> format("%d");
            $nbJour = (int)$diffJour;
            return $nbJour;

        }

    }

    public function __toString() {

        return "<p>" . $this -> getPersonne() . " - Chambre N° " . $this -> getChambre() . " - du " . $this -> getDateDebut() . " au " . $this -> getDateFin() . "</p>";

    }
}

?>
    
