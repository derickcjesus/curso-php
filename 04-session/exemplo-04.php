<?php 

require_once("config.php");

session_regenerate_id(); //Atualiza o id da sessão atual com um novo id gerado

echo session_id();

?>