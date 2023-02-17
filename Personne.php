<?php


class Personne {

    private string $_name;
    private string $_firstname;
    private DateTime $_birthD;

    // public function __construct(string $name, string $firstname, string $birthD){
    //     $this->_name = $name;
    //     $this->_firstname = $firstname;
    //     $this->_birthD = new DateTime($birthD);
    // }

    //setters 

    public function setName($_name) {
        $this->_name = $_name;
    }
    
    public function setFirstname($_firstname){
        $this->_firstname = $_firstname;
    }

    public function getName(){
        return $this ->_name;
    }

    public function getFirstname(){
        return $this ->_firstname;
    }


    // public function getFirstname(){
    //     return $this ->_firstname;
    // }
    // public function getBirthdate(){
    //     return $this ->_birthD;
    // }


    // public function age(){
    //     $_birthD = $this->_birthD;
    //     $today = new DateTime();
    //     $age = $_birthD -> diff($today);
    //     return $age->format('%y');
    // }


    // faire to string 
    public function __toString(){

    }
}


?>