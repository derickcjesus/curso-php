<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "tudo certo meu parcero, DELETADO COM SUCESSO";

?>