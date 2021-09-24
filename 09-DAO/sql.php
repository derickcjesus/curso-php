<?php

class sql extends PDO {

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }

    public function query($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery, $params);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function setParam($statment, $key, $value)
    {
        $statment->bindParam($key, $value);
    }

    public function setParams($statment, $parameters = array())
    {
        foreach($parameters as $key => $value){
            $this->setParam($key, $value);
        }
    }

    public function select($rawQuery)
    {
        $stmt = $this->query($rawQuery);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>