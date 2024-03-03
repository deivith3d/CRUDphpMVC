<?php

class AlunoDAO {
    // Atributos

    public function cadastraAluno(AlunoModel $aluno){
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO aluno(nomeAlu, matriculaAlu, cpfAlu, idadeAlu, emailAlu) VALUES (?,?,?,?,?)";
        $stmt = $conex->conn->prepare($sql);
        $stmt = bindValue(1,$aluno->nome);
        $stmt = bindValue(2,$aluno->matricula);
        $stmt = bindValue(3,$aluno->cpf);
        $stmt = bindValue(4,$aluno->idade);
        $stmt = bindValue(5,$aluno->email);
        $res = $stmt->execute();
        if($res)
        {
            echo "<script>alert('Cadastro Realizado com sucesso');<script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível realizadr o cadastro');<script>";
        }
    }
}
?>