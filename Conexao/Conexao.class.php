<?php
Class Conexao{
    private $connection;
    public function __construct(){
        $nome = 'root';
        $senha = 'root';
        $server = 'mysql:host=localhost;dbname=retry';
        $this->connection = new PDO($server, $nome, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function getConnection(){
        return $this->connection;
    }
}
?>
