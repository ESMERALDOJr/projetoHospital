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
    $cpf = $_GET['cpf'];

    // comando: DELETE FROM tabela WHERE campo=valor
    $comandosql = "DELETE FROM `paciente` WHERE `paciente`.`cpf` = $cpf";   

    if($conexao->query($comandosql)){
        echo "Excluído com sucesso";
    }
    
?>
<br>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>