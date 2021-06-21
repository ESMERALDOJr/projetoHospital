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

$acao = "inserir_medico.php";

if (isset($_GET['crm'])) { //caso esteja em modo de edição
    $acao = "atualizar_medico.php"; //mudo a ação

    $crm = $_GET['crm']; //crio variável com o codigo
    //listo o cliente especifico caso esteja editando
    $comandosql = "SELECT * FROM `medico` WHERE `medico`.`crm` = $crm";
    $dados = $conexao->query($comandosql); //retorna uma tabela
    while ($dadosmedico = $dados->fetch_object()) //converto cada um dados em um objeto
    {
        //variáveis que serão atribuidas nos values dos campos
        $crm = $dadosmedico->crm;
        $nome_medico = $dadosmedico->nome_medico;
        $telefone_medico = $dadosmedico->telefone_medico;
        $especialidade = $dadosmedico -> especialidade;
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
        <h1> Cadastro de Médico </h1>
        <form action="<?php echo $acao; ?>" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="crm" value="<?php echo isset($crm) ? $crm : ""; ?>" name="crm" placeholder="crm">
                <label for="codigo">CRM</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome_paciente" value="<?php echo isset($nome_medico) ? $nome_medico : ""; ?>" name="nome_medico" placeholder="Nome do Médico">
                <label for="nome">Nome do Médico</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefone" name="telefone_medico" value="<?php echo isset($telefone_medico) ? $telefone_medico : ""; ?>" placeholder="(11)91111-1111">
                <label for="telefone">Telefone do Medico</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="especialidade" name="especialidade" value="<?php echo isset($especialidade) ? $especialidade : ""; ?>" placeholder="especialidade">
                <label for="telefone">Especialidade</label>
            </div><br>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-secondary">
        </form>
        <br>
        <a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>
        <div>
</body>

</html>