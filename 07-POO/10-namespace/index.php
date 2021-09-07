<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Derick");
$cad->setEmail("derick@empresa.com");
$cad->setSenha("1234561");

$cad->registrarVenda();

?>