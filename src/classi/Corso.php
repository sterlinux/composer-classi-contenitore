<?php

namespace classi;

class Corso{
    private $nome;              // nome del corso (stringa)
    private $codice;            // codice del corso (stringa)
    private $listaAllievi;      // contenitore di istanze della classe Studente
    private $docente;           // istanza della classe Docente (da fare)
    private $programma;         // programma del corso (stringa)

    public function __construct(){
        $this->listaAllievi = array();
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCodice($codice){
        $this->codice = $codice;
    }

    public function setProgramma($programma){
        $this->programma = $programma;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCodice(){
        return $this->codice;
    }

    public function getProgramma(){
        return $this->programma;
    }

    /*
        La funzione ha lo scopo di aggiungere all'array $this->listaAllievi
        il riferimento ad uno Studente passato come argomento.
    */
    public function addStudente($s){
        array_push($this->listaAllievi, $s);
    }

    public function setDocente($docente){
        $this->docente = $docente;
    }

    public function getDocente(){
        return $this->docente;
    }

    /*
        Corso: Web Developer - Ful Stack
        Codice: 23-FAD-WDP-001
        Programma: Programma del corso
        ----------------------------------------
        Allievi:
        > Mario Rossi (STD0001) mario.rossi@example.com
        > Mario Rossi (STD0001) mario.rossi@example.com
        > Mario Rossi (STD0001) mario.rossi@example.com
        ....

        ----------------------------------------
        Docente del corso:
        > Giovanni Gialli (DOC001)
        > Materia insegnata: Lingaggio di programmazione PHP
    
    */
    
    
    public function __toString(){
        return "Studente";
    }

    public function esportaInWord(){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        
        $section = $phpWord->addSection();
        // Adding Text element to the Section having font styled by default...
        $testo = "La mia stringa può essere contenuta anche in una variabile e mi aspetto che questo testo vada su una nuova riga";
        $section->addText('Questa è niente altro che una banalissima stringa');
        $section->addText($testo);

        
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('generatoDaCorso.docx');
    }



}




?>