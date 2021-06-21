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

    $codigo = $_POST['codigo'];
    $nome_plano = $_POST['nome_plano'];
    $telefone_plano = $_POST['telefone_plano'];

    //$conexao é o objeto de conexao que já tem o banco de dados
    //insert into tabela (campos) values (valores)
    $insere_plano = "INSERT INTO planosaude
    (codigo, nome_plano, telefone_plano) 
    VALUES ($codigo, '$nome_plano', '$telefone_plano')";
     //valores do tipo string precisam estar entre aspas simples
     //inserir datas aaaa-mm-dd '2021-02-14'

    // $conexao->query($insere_plano);
    if(($conexao->query($insere_plano)))
    {
        echo "<br>".$codigo."<br>".$nome_plano."<br>".$telefone_plano;
        echo "<br> Cadastrado com Sucesso!";
    }

?>

<br>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>