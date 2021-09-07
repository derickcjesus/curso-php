<?php

    spl_autoload_register(function($nomeClasse){

        $dirName = "class";
        $filename = $dirName . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

        if(file_exists($filename)){
            require_once($filename);
        }
    });

?>