<?php

$x = 10;

function trocaValorVariavel(&$x) { //O & indica que o parâmetro é passado por referência. 
    $x += 50;

    return $x;
}

echo trocaValorVariavel($x);
echo "<br>";
echo $x;

?>