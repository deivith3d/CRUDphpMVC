<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Listar Alunos</title>
</head>
<body>

<?php
    include("../controller/AlunoController.php"); 
    $res = AlunoController::listarAlunos();
    $qtd = $res->rowCount();
    if($qtd>0){
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>"; 
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print"</tr>";
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            echo "<form method='post' action='../controller/processaAluno.php'>";
            print "<td>".$row->idAlu."</td>";
            print "<td>".$row->nomeAlu."</td>"; 
            print "<td>".$row->matriculaAlu."</td>";
            print "<td>".$row->cpfAlu."</td>";
            print "<td>".$row->idadeAlu."</td>";
            print "<td>".$row->emailAlu."</td>";
            print "<td>
                        <input type='hidden' name='idAluno' value='$row->idAlu' />
                        <input type='hidden' name='op' value='formAlterar' />
                        <input type='submit' value='Alterar'>

                    </td>";
            print "<td>
                    <input type='hidden' name='op' value='formAlterar' />
                    <input type='submit' value='Excluir'>

                </td>";
                    echo "</form>";
            print"</tr>";
        }
        print"</table>";
    }
    else{
        echo "<p>Nenhum registro encontrado!</p>";
    }
?>

</body>
</html>