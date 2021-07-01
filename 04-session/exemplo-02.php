<?php

require_once("config.php");

//session_unset($_SESSION['nome']); //Libera todas as variáveis de sessão

echo $_SESSION['nome'];

//session_destroy(); //Destrói todos os dados registrados em uma sessão

?>