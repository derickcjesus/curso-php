<?php

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse . ".php") === true){
        require_once($nomeClasse . ".php");
    }
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){
    if(file_exists("ClassesAbstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once("ClassesAbstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

$toro = new Carro();

$toro->frenar(30);

?>