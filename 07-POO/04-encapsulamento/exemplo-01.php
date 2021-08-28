<?php

class Pessoa {

    public $nome = "Messi";
    protected $idade = 35;
    private $salario = 1;

    public function mostrarDados(){

        echo $this->nome . "</br>";
        echo $this->idade . "</br>";
        echo $this->salario . "</br>";
    }
}

class Programador extends Pessoa {

    public function mostrarDados(){

        echo get_class($this) . "</br>";


        echo $this->nome . "</br>";
        echo $this->idade . "</br>";
        echo $this->salario . "</br>";
    }
}

$obj = new Programador();

$obj->mostrarDados();

?>