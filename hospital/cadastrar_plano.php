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

$acao = "inserir_plano.php";

if (isset($_GET['codigo'])) { //caso esteja em modo de edição
    $acao = "atualizar_plano.php"; //mudo a ação

    $codigo = $_GET['codigo']; //crio variável com o codigo
    //listo o cliente especifico caso esteja editando
    $comandosql = "SELECT * FROM `planosaude` WHERE `planosaude`.`codigo` = $codigo";
    $dados = $conexao->query($comandosql); //retorna uma tabela
    while ($dadosplano = $dados->fetch_object()) //converto cada um dados em um objeto
    {
        //variáveis que serão atribuidas nos values dos campos
        $codigo = $dadosplano->codigo;
        $nome_plano = $dadosplano->nome_plano;
        $telefone_plano = $dadosplano->telefone_plano;
    }
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container-fluid">
        <h1> Cadastro de Plano </h1>
        <form action="<?php echo $acao; ?>" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="codigo" value="<?php echo isset($codigo) ? $codigo : ""; ?>" name="codigo" placeholder="Código">
                <label for="codigo">Código do Plano</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome_plano" value="<?php echo isset($nome_plano) ? $nome_plano : ""; ?>" name="nome_plano" placeholder="Nome do Plano">
                <label for="nome">Nome do Plano</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefone" name="telefone_plano" value="<?php echo isset($telefone_plano) ? $telefone_plano : ""; ?>" placeholder="(11)91111-1111">
                <label for="telefone">Telefone do Plano</label>
            </div><br>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-secondary">
        </form>
        <br>
        <a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>
        <div>
</body>

</html>