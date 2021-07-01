<?php 

//include "inc/exemplo-01.php"; //o include tenta trazer o arquivo mesmo que ele não exista ou esteja errado.
                                //o include também traz arquivos de outros servidores externos.

require "inc/exemplo-01.php"; //o require só traz o arquivo se ele existir e estiver tudo certo. 
//require_once ou include_once traz somente o arquivo uma única vez.

$resultado = somar(10, 40);

echo $resultado;

?>