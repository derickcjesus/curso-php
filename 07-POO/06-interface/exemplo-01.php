<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function marcha($velocidade);

}

class Corolla implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "o Corolla acelerou até a velocidade de " . $velocidade . " km/h" . "<br/>";
    }

    public function frenar($velocidade)
    {
        echo "o Corolla freiou com " . $velocidade . " km/h" . "<br/>";
    }

    public function marcha($velocidade)
    {
        echo "o Corolla passou de marcha com " . $velocidade . " km/h" . "<br/>";
    }
}

$carro = new Corolla();

$carro->acelerar(90);
$carro->frenar(30);
$carro->marcha(10);


?>