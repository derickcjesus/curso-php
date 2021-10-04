<?php

class User {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdUsuario(){
        return $this->idusuario;
    }

    public function setIdUsuario($value){
        $this->idusuario = $value;
    }

    public function getLogin(){
        return $this->deslogin;
    }

    public function setLogin($value){
        $this->deslogin = $value;
    }

    public function getSenha(){
        return $this->dessenha;
    }

    public function setSenha($value){
        $this->dessenha = $value;
    }

    public function getCadastro(){
        return $this->dtcadastro;
    }

    public function setCadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0){
            $row = $results[0];

            $this->setIdUsuario($row["idusuario"]);
            $this->setLogin($row["deslogin"]);
            $this->setSenha($row["dessenha"]);
            $this->setCadastro(new DateTime($row["dtcadastro"]));
        }
    }

    public static function getList(){

        $sql = new sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login){

        $sql = new sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ));

    }

    public function validateLogin($login, $password){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if(count($results) > 0){

            $row = $results[0];

            $this->setIdUsuario($row["idusuario"]);
            $this->setLogin($row["deslogin"]);
            $this->setSenha($row["dessenha"]);
            $this->setCadastro(new DateTime($row["dtcadastro"]));
        }else {
            throw new Exception("Login ou senha inválidos");
        }
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdUsuario(),
            "deslogin"=>$this->getLogin(),
            "dessenha"=>$this->getSenha(),
            "dtcadastro"=>$this->getCadastro()
        ));
    }

}

?>