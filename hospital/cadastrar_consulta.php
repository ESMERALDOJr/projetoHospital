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

$acao = "inserir_consulta.php";

if (isset($_GET['crm'])) { //caso esteja em modo de edição
    $acao = "atualizar_consulta.php"; //mudo a ação

    $crm = $_GET['crm']; //crio variável com o codigo
    //listo o cliente especifico caso esteja editando
    $comandosql = "SELECT * FROM `consulta` WHERE `consulta`.`crm` = $crm";
    $dados = $conexao->query($comandosql); //retorna uma tabela
    while ($dadosconsulta = $dados->fetch_object()) //converto cada um dados em um objeto
    {
        //variáveis que serão atribuidas nos values dos campos
        $crm = $dadosconsulta->crm;
        $cpf = $dadosconsulta->cpf;
        $data_consulta = $dadosconsulta->data_consulta;
        $hora_consulta = $dadosconsulta -> hora_consulta;
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
        <h1> Cadastro de Consulta  </h1>
        <form action="<?php echo $acao; ?>" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="crm" value="<?php echo isset($crm) ? $crm : ""; ?>" name="crm" placeholder="crm">
                <label for="codigo">CRM</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cpf" value="<?php echo isset($cpf) ? $cpf : ""; ?>" name="cpf" placeholder="cpf">
                <label for="nome">CPF</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="data" name="data_consulta" value="<?php echo isset($data_consulta) ? $data_consulta : ""; ?>" placeholder="xx/xx/xxxx">
                <label for="telefone">Data da Consulta</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="hora" name="hora_consulta" value="<?php echo isset($hora_consulta) ? $hora_consulta : ""; ?>" placeholder="00:00">
                <label for="telefone">Hora da Consulta</label>
            </div><br>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-secondary">
        </form>
        <br>
        <a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>
        <div>
</body>

</html>