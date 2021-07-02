<?php

function soma(int ...$valores):string { //O token ... permite adicionar inúmeros parâmetros. E o : é o tipo 
    return array_sum($valores);         //do retorno, nesse caso string.
}

echo var_dump(soma(10,10));

?>