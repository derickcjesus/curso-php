<?php

function informeQualquerParametro(){
    $argumentos = func_get_args(); //Retorna um array contendo uma lista de argumentos da função
    return $argumentos;
}

var_dump(informeQualquerParametro("esse é um argumento", "esse é outro"));

?>