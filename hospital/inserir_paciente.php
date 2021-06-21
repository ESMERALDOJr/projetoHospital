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
   
    $cpf = $_POST['cpf'];
    $nome_paciente =$_POST['nome_paciente'];
    $endereco = $_POST['endereco'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone_paciente = $_POST['telefone_paciente'];
    $codigo = $_POST['codigo'];

    //$conexao é o objeto de conexao que já tem o banco de dados
    //insert into tabela (campos) values (valores)
    $insere_paciente = "INSERT INTO paciente
    (cpf, nome_paciente, endereco, data_nascimento, telefone_paciente, codigo) 
    VALUES ($cpf, '$nome_paciente', '$endereco', '$data_nascimento', '$telefone_paciente', $codigo)";
    //valores do tipo string precisam estar entre aspas simples
    //inserir datas aaaa-mm-dd '2021-02-14'

    if(($conexao->query($insere_paciente)))
    {
        echo "<br>".$cpf."<br>".$nome_paciente."<br>".$endereco."<br>".$data_nascimento."<br>".$telefone_paciente."<br>".$codigo;
        echo "<br> Cadastrado com Sucesso!";
    }   
    
?>

<br>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>