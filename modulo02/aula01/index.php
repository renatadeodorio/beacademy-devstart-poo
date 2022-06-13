<?php

ini_set('display_errors', 1);

include "Aluno.php";
include "Curso.php";
include "Professor.php";

$p1 = new Professor();
$p1->nome = "Renata";
$p1 ->cpf ="123.123.123-12";
$p1-> salario = 1000 ;  


$p1-> cpf ="RT12GH456";

var_dump($p1);



