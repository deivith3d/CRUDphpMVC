<?php

class AlunoDAO {
    // Atributos

    public function cadastraAluno(AlunoModel $aluno){
        include_once 'Conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO aluno (nomeAlu, matriculaAlu, cpfAlu, idadeAlu, emailAlu) VALUES (:nome, :matricula, :cpf, :idade, :email)";
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':nome',$aluno->getNome());
        $stmt->bindValue(':matricula',$aluno->getMatricula());
        $stmt->bindValue(':cpf',$aluno->getCpf());
        $stmt->bindValue(':idade',$aluno->getIdade());
        $stmt->bindValue(':email',$aluno->getEmail());
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