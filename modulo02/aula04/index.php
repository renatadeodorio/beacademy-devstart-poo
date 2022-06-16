<?php

ini_set("display_errors", 1);

include 'Usuario.php';
include 'Cliente.php';
include "ClienteVip.php";
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente("renata@email.com" , "123456"); //construtor do Usuário
$c1 ->setNome('Renata');
$c1 ->setDataCadastro("01/01/2019");

$g1 = new Gestor ("renan@email.com" , "123123", 6000); //construtor do Gestor
$g1->setNome('Renan');

$gg1 = new GestorGeral ("rafael@email.com" , "1q2w3e", 9000);
 
var_dump ($c1);
var_dump ($g1);
var_dump ($gg1);
var_dump ($clienteVip);

