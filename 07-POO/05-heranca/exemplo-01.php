<?php

class Documento {

    private $numero;

    public function getNumero():int{

        return $this->numero;
    }
    
    public function setNumero($numero){

        $this->numero = $numero;
    }
}

class CPF extends Documento{

    public $nome;

    public function validar() {

        echo $this->getNumero() . "<br/>";
        echo $this->nome . "<br/>";

    }
}

$cpf = new CPF();

$cpf->setNumero(120909);
$cpf->nome = "Derick de Jesus";
$cpf->validar();

?>