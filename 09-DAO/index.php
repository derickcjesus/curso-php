<?php

require_once("config.php");

//Devolve os resultados por ID
//$miranha = new User();
//$miranha->loadById(4);
//echo $miranha->__toString();

//Devolve uma lista 
//$list = User::getList();
//echo json_encode($list);


//Filtra uma busca por nome no campo de login
//$search = User::search("mira");
//echo json_encode($search);

//Valida o login e senha
$validate = new User();
$validate->validateLogin("derick", "9090");
echo $validate;
?>