<!--
* Eduardo Fabricio Goza 
* Esmeraldo Euclides Carneiro Junior 
* Gabriely Colombo 
* Liliane Paulino Ferreira do Nascimento 
* Luis Carlos Kakimoto 
* Ramses Neris Godoy     
-->
<?php
include "conexao.php";

$comandosql = "Select * from medico";
$dados = $conexao->query($comandosql); //retorna uma tabela

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Lista de Médicos Cadastrados</title>
</head>

<body>
    <div class="container-fluid">
        <h1> Lista de Médicos Cadastrados</h1>
        <button class="btn btn-primary" onclick="document.location='cadastrar_medico.php'">
            Adicionar Novo Medico
        </button>
        <br><br>
        <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">CRM</th>
                    <th scope="col">Nome do Médico</th>
                    <th scope="col">Telefone do Médico</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($dados_medico = $dados->fetch_object()) //conversão de cada um dados em um objeto
                {
                ?>
                    <tr>
                        <th scope="row"><?php echo $dados_medico->crm; ?></th>
                        <td><?php echo $dados_medico->nome_medico; ?> </td>
                        <td><?php echo $dados_medico->telefone_medico; ?></td>
                        <td><?php echo $dados_medico->especialidade; ?></td>

                        <td><a href="excluir_medico.php?crm=<?php echo $dados_medico->crm ?>" class="btn btn-danger" role="button" data-bs-toggle="button">Excluir</a> | <a href="cadastrar_medico.php?crm=<?php echo $dados_medico->crm ?>" class="btn btn-warning" role="button" data-bs-toggle="button">Editar</a> </td>
                    </tr>
                <?php
                }
                $dados->free_result();
                $conexao->close();
                ?>

            </tbody>
        </table>
        <br>
        <a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>
    </div>
</body>

</html>