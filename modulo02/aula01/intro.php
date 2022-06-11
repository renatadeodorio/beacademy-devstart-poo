<?php

include "Aluno.php";
include "Professor.php";
include "Curso.php";

$a = 10; //interger
$b = "dez"; //string

$a1 = new Aluno(); //objeto Aluno
$a1->nome = "Renata";
$a1->cpf = "123.123.123-12";

$a1->nome .= "Deodório";

$cursoPHP = new Curso(); //objeto Curso
$cursoPHP->nome = "Introdução ao PHP";
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = "Aprender o básico e intermediário do PHP";


echo "<h1>Aluno: {$a1->nome}</h1>";

