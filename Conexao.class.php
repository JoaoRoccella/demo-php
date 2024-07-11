<?php

class Conexao {
    private $host = "localhost";
    private $dbname = "ccellas";
    private $usuario = "root";
    private $senha = "admin";
    private $conexao;

    public function __construct() {
        try {
            $this->conexao = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão realizada com sucesso!";
        } catch(PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        }
    }

    public function getConexao() {
        return $this->conexao;
    }

    public function consulta($sql) {
        return $this->conexao->query($sql);
    }
}
