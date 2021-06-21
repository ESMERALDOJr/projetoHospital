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
    $cpf =$_POST['cpf'];
    $data_consulta = $_POST['data_consulta'];
    $hora_consulta = $_POST['hora_consulta'];

    //$conexao é o objeto de conexao que já tem o banco de dados
    //insert into tabela (campos) values (valores)
    $insere_consulta = "INSERT INTO consulta
    (crm, cpf, data_consulta, hora_consulta) 
    VALUES ($crm, $cpf, '$data_consulta', '$hora_consulta')";
    //valores do tipo string precisam estar entre aspas simples
    //inserir datas aaaa-mm-dd '2021-02-14'

    if(($conexao->query($insere_consulta)))
    {
        echo "<br>".$crm."<br>".$cpf."<br>".$data_consulta."<br>".$hora_consulta;
        echo "<br> Cadastrado com Sucesso!";
    }   
    
?>

<br>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>