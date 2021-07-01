<?php

$povoados = array();

array_push($povoados, array(
    'nome'=>'rabeca',
    'populacao'=>800
));

array_push($povoados, array(
    'nome'=>'remanso',
    'populacao'=>600
)); 

echo json_encode($povoados);

?>