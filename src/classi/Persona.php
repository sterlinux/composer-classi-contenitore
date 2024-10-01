<?php

namespace classi;

class Persona{
    private $cognome;
    private $nome;
    private $codiceFiscale;


    public function setCognome($cognome){
        $this->cognome = $cognome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCodiceFiscale($codiceFiscale){
        $this->codiceFiscale = $codiceFiscale;
    }

    public function getCodiceFiscale(){
        return $this->codiceFiscale;
    }


}



?>