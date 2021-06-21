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

    $criadb = "CREATE DATABASE hospital";
    if($conexao2->query($criadb)){

    }else{
        echo "erro ao criar banco de dados";//banco de dados já existe ou problema na criação
    }

?>