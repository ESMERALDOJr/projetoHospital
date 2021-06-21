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

$comandosql = "Select * from planosaude";
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
    <title>Lista dos Planos de Saúde Cadastrados</title>
</head>

<body>
    <div class="container-fluid">
        <h1> Lista do Planos de Saúde Cadastrados</h1>
        <button class="btn btn-primary" onclick="document.location='cadastrar_plano.php'">
            Adicionar Novo Plano
        </button>
        <br><br>
        <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome do Plano</th>
                    <th scope="col">Telefone do Plano</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($dados_plano= $dados->fetch_object()) //conversão de cada um dados em um objeto
                {
                ?>
                    <tr>
                        <th scope="row"><?php echo $dados_plano->codigo; ?></th>
                        <td><?php echo $dados_plano->nome_plano; ?> </td>
                        <td><?php echo $dados_plano->telefone_plano; ?></td>

                        <td><a href="excluir_plano.php?codigo=<?php echo $dados_plano->codigo ?>" class="btn btn-danger" role="button" data-bs-toggle="button">Excluir</a> | <a href="cadastrar_plano.php?codigo=<?php echo $dados_plano->codigo ?>" class="btn btn-warning" role="button" data-bs-toggle="button">Editar</a> </td>
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