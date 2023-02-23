<?php

class Email {
    private $email;

    public function setEmail($email){
        $this -> email = $email;
    }
    
    public function getEmail(){
        return $this -> email;
    }
    
    public function checkMail(){
        if(filter_var($this -> email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email : ".$this->email." est valide."."<br>";
            } else {
            echo "L'adresse email : ".$this->email." est invalide."."<br>";
            }
    }
}

?>