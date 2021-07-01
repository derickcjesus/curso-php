<?php

$dados_json = '[{"nome":"rabeca","populacao":800},{"nome":"remanso","populacao":600}]';

$dados_arrray = json_decode($dados_json, true);

var_dump($dados_arrray);

?>