<?php
include 'classes/Studente.php';

//$stud = new Studente();

$studenti = [

    ["nome"=>"NOME", "cognome"=>"COGNOME",	"email" => "NOME.COGNOME@edu.itspiemonte.it"],

];	

$elencoStudenti=array();

foreach ($studenti as $studente) {
    $query = "insert into studenti (nome, cognome, email) values ('".$studente['nome']."',"
            . "'".$studente['cognome']."',"
            . "'".$studente['email']."'  ) ";
    $DB->insert($query);
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

