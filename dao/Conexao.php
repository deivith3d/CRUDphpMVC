<?php

class Conexao {
    // Atributos
    protected $conn;

    public function fazConexao()
    {
        try{
            $banco="mysql:host=localhost:3306;dbname=escola";
            $this->coon = new PDO($banco,'root','root');

        }
        catch(PDOException $e){
            echo "Erro de Conexao: ".$e->getMessage();

        }
    }
}
?>