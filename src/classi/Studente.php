<?php

namespace classi;


class Studente extends Persona{
    private $matricola;
    private $email;

    public function setEmail($email){
        $this->email = $email;
    }

    public function setMatricola($matricola){
        $this->matricola = $matricola;
    }

    public function getMatricola(){
        return $this->matricola;
    }

    public function getEmail(){
        return $this->email;
    }

    public function __toString(){
        
    }
}



?>