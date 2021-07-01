<?php

    $nome = (int)$_GET["nome"]; //com o (int) o que vier do get é forçado a ser um "inteiro". o GET é uma array super global
    $ip = $_SERVER["REMOTE_ADDR"]; //a array super global SERVER vai pegar o ambiente do usuário. Neste caso, ele pega o ip
    var_dump($nome);

?>