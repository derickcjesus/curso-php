<?php 

$nome = "derick";

function mostrarNome(){
    global $nome; //com a palavra reservada "global" a variável de escopo global pode ser vista dentro da função
    echo $nome;
}

mostrarNome();

?>