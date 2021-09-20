<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

/* Enquanto o rollBack impede a execução do comando no bd, o commit executa */
//$conn->rollBack();
$conn->commit();

echo "tudo certo meu parcero, DELETADO COM SUCESSO";

?>