<?php


class Personne {

    private string $_name;
    private string $_firstname;
    private DateTime $_birthd;

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


    // public function age(){
    //     $_birthd = $this->_birthd;
    //     $today = new DateTime();
    //     $age = $_birthd -> diff($today);
    //     return $age->format('%y');
    // }


    // // faire to string 
    public function __toString()
    {
        return "$this->_firstname._name";
    }
}

?>