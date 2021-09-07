<?php

function __autoload($nomeClasse){

    require_once("$nomeClasse.php");
}

$corolla = new Carro();
$corolla->acelerar(100);


?>