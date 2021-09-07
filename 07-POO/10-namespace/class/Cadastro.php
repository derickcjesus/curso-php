<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;

    public function getNome():string
    {
        return $this->nome;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getSenha():string
    {
        return $this->senha;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {   
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        if($senha === "123456"){
            echo "Esse tipo de senha é fraca, crie outra";
        }else{
            $this->senha = $senha;
        }
        
    }

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }


}

?>