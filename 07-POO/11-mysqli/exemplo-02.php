<?php

$connection = new mysqli("localhost", "root", "", "dbphp7");

if($connection->connect_error){
    echo "ERRO: " . $connection->connect_error;
}else{
    echo "connect successful"; 
}

$result = $connection->query("SELECT * FROM tb_usuarios");

$data = array();

while($row = $result->fetch_assoc()){
    array_push($data, $row);
}

echo json_encode($data);

?>