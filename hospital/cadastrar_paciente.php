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

$acao = "inserir_paciente.php";

if (isset($_GET['cpf'])) { //caso esteja em modo de edição
    $acao = "atualizar_paciente.php"; //mudo a ação

    $cpf = $_GET['cpf']; //crio variável com o codigo
    //listo o cliente especifico caso esteja editando
    $comandosql = "SELECT * FROM `paciente` WHERE `paciente`.`cpf` = $cpf";
    $dados = $conexao->query($comandosql); //retorna uma tabela
    while ($dadospaciente = $dados->fetch_object()) //converto cada um dados em um objeto
    {
        //variáveis que serão atribuidas nos values dos campos
        $cpf = $dadospaciente->cpf;
        $nome_paciente = $dadospaciente->nome_paciente;
        $endereco = $dadospaciente -> endereco;
        $data_nascimento = $dadospaciente -> data_nascimento;
        $telefone_paciente = $dadospaciente->telefone_paciente;
        $codigo = $dadospaciente -> codigo;
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
        <h1> Cadastro de Paciente </h1>
        <form action="<?php echo $acao; ?>" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cpf" value="<?php echo isset($cpf) ? $cpf : ""; ?>" name="cpf" placeholder="cpf">
                <label for="codigo">CPF</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome_paciente" value="<?php echo isset($nome_paciente) ? $nome_paciente : ""; ?>" name="nome_paciente" placeholder="Nome do Paciente">
                <label for="nome">Nome do Paciente</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endereco" value="<?php echo isset($endereco) ? $endereco : ""; ?>" name="endereco" placeholder="endereço">
                <label for="nome">Endereço</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="data_nascimento" value="<?php echo isset($data_nascimento) ? $data_nascimento : ""; ?>" name="data_nascimento" placeholder="data de nascimento">
                <label for="nome">Data de Nascimento</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefone" name="telefone_paciente" value="<?php echo isset($telefone_paciente) ? $telefone_paciente : ""; ?>" placeholder="(11)91111-1111">
                <label for="telefone">Telefone do Paciente</label>
            </div><br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo isset($codigo) ? $codigo : ""; ?>" placeholder="codigo do plano de saude">
                <label for="telefone">Código de Plano de Saúde</label>
            </div><br>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-secondary">
        </form>
        <br>
        <a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>
        <div>
</body>

</html>