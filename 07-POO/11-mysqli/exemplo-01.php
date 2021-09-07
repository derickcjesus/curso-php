<?php

$connection = new mysqli("localhost", "root", "", "dbphp7");

if($connection->connect_error){
    echo "ERRO: " . $connection->connect_error;
}else{
    echo "connect successful";
}

$stmt = $connection->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $senha);

$login = "derick";
$senha = "9090";

$stmt->execute();

?>