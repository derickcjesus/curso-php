<?php

class Celular {
    private $imei;
    private $marca;
    private $modelo;
    private $ano;

    public function getImei():int{
        return $this->imei;
    }

    public function setImei($imei){
        $this->imei = $imei;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "imei"=>$this->getImei(),
            "marca"=>$this->getMarca(),
            "modelo"=>$this->getModelo(),
            "ano"=>$this->getAno()
        );
    }

}

$celular = new Celular();

$celular->setImei(845626156565654);
$celular->setMarca("Xiaomi MI");
$celular->setModelo("A2 Lite");
$celular->setAno(2018);

print_r($celular->exibir())


?>