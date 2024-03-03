<?php
    // Obtendo dados do formulário e fazendo validações
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];    
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];

    // Incluindo a classe AlunoModel
    include '../model/AlunoModel.php';

    // Criando uma instância da classe AlunoModel
    $aluno = new AlunoModel($nome, $matricula, $cpf, $idade, $email);

    // Cadastrando o aluno
    $aluno->cadastrarAluno($aluno);


?>