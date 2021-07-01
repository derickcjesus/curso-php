<?php

$nome = "derick";
$sobrenome = "Jesus";
$nomeCompleto = $nome . "" . $sobrenome; //o . serve para concatenar os dados

//echo $nomeCompleto;

unset($nome); //o unset elimina a var da memória

if (isset($nome)) { //o isset verificar se a var existe
    //echo $nome;
}


$meutipo = 2021;
var_dump($meutipo); // o dump lhe diz o tipo de variável