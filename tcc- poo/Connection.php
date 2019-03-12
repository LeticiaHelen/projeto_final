<?php

class Connection {

    //atributos
    public $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;dbname=projeto_poo;", "root","");
    }

    public function getConnection(){
        return $this->connection;
    }


}

//Teste
//$conexao = new Connection();
//$conexao->getConnection();

