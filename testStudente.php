<?php

require "vendor/autoload.php";

use classi\Persona;
use classi\Studente;
use classi\Corso;
use classi\Docente;



$s = new Studente();
$s->setNome("Mario");
$s->setCognome("Rossi");
$s->setMatricola("STD0001");
$s->setEmail("mario.rossi@example.com");

$s2 = new Studente();
$s2->setNome("Marina");
$s2->setCognome("Verdi");
$s2->setMatricola("STD0002");
$s2->setEmail("marina.verdi@example.com");

$s3 = new Studente();
$s3->setNome("Alberto");
$s3->setCognome("Bianchi");
$s3->setMatricola("STD0003");
$s3->setEmail("alberto.bianchi@example.com");

$s4 = new Studente();
$s4->setNome("Alberto");
$s4->setCognome("Bianchi");
$s4->setMatricola("STD0003");
$s4->setEmail("alberto.bianchi@example.com");

//print_r($s);
$d = new Docente();
$d->setNome("Giovanni");
$d->setCognome("Gialli");
$d->setMateriaInsegnata("Linguaggio PHP");
$d->setCodice("DOC001");


$c = new Corso();
$c->setNome("Web Developer - Ful Stack");
$c->setCodice("23-FAD-WDP-001");
$c->setProgramma("Programma del corso");


$c->addStudente($s);
$c->addStudente($s2);
$c->addStudente($s3);
$c->addStudente($s4);

$c->setDocente($d);

//print_r($c);

echo $c . "\n";

$c->esportaInWord();

$p = new Persona();
$p->setNome("Mario");
$p->setCognome("Rossi");
$p->setCodiceFiscale("MRDSAKJSH");

/**
 * Commento per una prova in più
 * 
 */

?>