<?php

class Carro extends Automovel {

    public function voceDeuCavaloDePau($resposta){

        if($resposta == "sim"){
            echo "Tá maluco, cara. Faz isso não!";
        }else{
            echo "Ah tá, tranquilo";
        }
    }
}

?>