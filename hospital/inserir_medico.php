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
   
    $crm = $_POST['crm'];
    $nome_medico = $_POST['nome_medico'];
    $telefone_medico = $_POST['telefone_medico'];
    $especialidade = $_POST['especialidade'];

    //$conexao é o objeto de conexao que já tem o banco de dados
    //insert into tabela (campos) values (valores)
    $insere_medico = "INSERT INTO medico
    (crm, nome_medico, telefone_medico, especialidade) 
    VALUES ($crm, '$nome_medico', '$telefone_medico', '$especialidade')";
    //valores do tipo string precisam estar entre aspas simples
    //inserir datas aaaa-mm-dd '2021-02-14'

    if(($conexao->query($insere_medico)))
    {
        echo "<br>".$crm."<br>".$nome_medico."<br>".$telefone_medico."<br>".$especialidade;
        echo "<br> Cadastrado com Sucesso!";
    }   
    
?>

<br>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>