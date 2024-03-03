   <?php 

    // Obtendo dados do formulário
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];    
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];

       // Incluindo a classe AlunoController
       include 'AlunoController.php';
       $contr = new AlunoController();
       // Cadastrando o aluno
       $contr->cadastrarAluno($nome, $matricula, $cpf, $idade, $email);

    ?>