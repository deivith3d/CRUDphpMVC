   <?php 

   switch($_POST["op"])
   {
      case "incluir": incluir();break;
      case "formAlterar": formAlterar(); 
          break;
          case "alterar": alterar();break;
      case "listar": listar();break;
   }


   function incluir(){
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
   }
   function formAlterar()
   {
      include '../view/formAlterarAluno.php';

   }

   function alterar(){
      // Obtendo dados do formulário
      $nome = $_POST["nome"];
      $matricula = $_POST["matricula"];    
      $cpf = $_POST["cpf"];
      $idade = $_POST["idade"];
      $email = $_POST["email"];
      $id = $_POST["idAluno"];

      // Alterando a classe AlunoController
      include 'AlunoController.php';
      $contr = new AlunoController();
      // Cadastrando o aluno
      $contr->alterarAluno($id,$nome, $matricula, $cpf, $idade, $email);
   }

   function listar()
   {

   }



    ?>