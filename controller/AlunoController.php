<?php
    class AlunoController{
        public static function cadastrarAluno($nome, $matricula, $cpf, $idade, $email)
        {
            include '../model/AlunoModel.php';
            // Criando uma instância da classe AlunoModel
            $aluno = new AlunoModel($nome, $matricula, $cpf, $idade, $email);
            // Cadastrando o aluno
            $aluno->cadastrarAluno($aluno);
        }

    /*    public static function listarAlunos()
        {
            include '../model/AlunoModel.php';
            return AlunoModel::listarAlunos();
        }*/

        public static function listarAlunos()
        {
            include '../model/AlunoModel.php';
            $model = new AlunoModel(null,null,null,null,null);
            return $model->listarAlunos();
        }


    }

?>