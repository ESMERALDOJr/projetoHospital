<!--
* Eduardo Fabricio Goza 
* Esmeraldo Euclides Carneiro Junior 
* Gabriely Colombo 
* Liliane Paulino Ferreira do Nascimento 
* Luis Carlos Kakimoto 
* Ramses Neris Godoy     
-->
<?php

    $host = "localhost";
    $usuario = "root"; //usuário banco de dados
    $senha = "";//senha em branco ou root
    $base = "hospital";//banco de dados
    $conexao = new mysqli($host, $usuario, $senha,$base);
    $conexao2 = new mysqli($host, $usuario, $senha);
    if($conexao->connect_errno){//se erro
        die('Erro de conexão: '.$conexao->connect_errno . '-'. $conexao->connect_error);
    }
    else{
        echo "conectado com sucesso!";//se ok 
    }
      
?>