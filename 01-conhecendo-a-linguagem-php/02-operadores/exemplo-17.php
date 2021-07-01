<?php

$a = 56;
$b = 55;

echo "seu número é $a";

var_dump($a <=> $b); //O operador "nave espacial" é uma condição. Se $a for maior que $b, o resultado é 1. 
//Senão é -1. Se forem igual é 0. 

//

$c = NULL;
$d = NULL;
$e = 10;

echo $c ?? $d ?? $e; // O ?? é chamado Null Coalesce, e verifica se alguma variável é nula e pula por cima dela.
?>