<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function marcha($velocidade);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "o Carro acelerou até a velocidade de " . $velocidade . " km/h" . "<br/>";
    }

    public function frenar($velocidade)
    {
        echo "o Carro freiou com " . $velocidade . " km/h" . "<br/>";
    }

    public function marcha($velocidade)
    {
        echo "o Carro passou de marcha com " . $velocidade . " km/h" . "<br/>";
    }
}

class Moto extends Automovel {

    public function capacete($tipoCapacete){

        if($tipoCapacete == "Coquinho"){
            echo $tipoCapacete . " Não pode, é irregular" . "<br/>"; 
        }elseif($tipoCapacete == "Ciclistico"){
            echo $tipoCapacete . " Não pode, é irregular" . "<br/>"; 
        }elseif($tipoCapacete == "EPI"){
            echo $tipoCapacete . " Não pode, é irregular" . "<br/>"; 
        }
    }
}

class Carro extends Automovel {

    public function voceDeuCavaloDePau($resposta){

        if($resposta == "sim"){
            echo "Tá maluco, cara. Faz isso não!";
        }else{
            echo "Ah tá, tranquilo";
        }
    }
}

$fan = new Moto();

$fan->acelerar(90);
$fan->capacete("EPI");


$porshe = new Carro();

$porshe->frenar(0);
$porshe->voceDeuCavaloDePau("sim");

?>