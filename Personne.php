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

    public function setName($_name){
        $this->_name = $_name;
    }
    
    public function setFirstname($_firstname){
        $this->_firstname = $_firstname;
    }

    public function setBirthd($_birthd){
        $this->_birthd = new DateTime($_birthd);

    }
    
    public function getName(){
        return $this ->_name;
    }
    
    public function getFirstname(){
        return $this ->_firstname;
    }
    
    
    public function getAge(){
        $today = new DateTime();
        $age = $this->_birthd -> diff($today);
        return $age->format('%y');
    }


    // // faire to string 
    
    public function __toString()
    {
        return $this->_firstname." ". $this->_name. " a ". $this->getAge(). " ans."."<br>";
    }
}

?>