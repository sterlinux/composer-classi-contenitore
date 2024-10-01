<?php

namespace classi;

class Docente extends Persona{
    private $materiaInsegnata;
    private $curriculum;
    private $codice;

    public function setMateriaInsegnata($materiaInsegnata){
        $this->materiaInsegnata = $materiaInsegnata;
    }

    public function setCurriculum($curriculum){
        $this->curriculum = $curriculum;
    }

    public function setCodice($codice){
        $this->codice = $codice;
    }

    public function getMateriaInsegnata(){
        return $this->materiaInsegnata;
    }

    public function getCurriculum(){
        return $this->curriculum;
    }

    public function getCodice(){
        return $this->codice;
    }
}



?>