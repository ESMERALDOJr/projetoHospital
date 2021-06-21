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
    $nome_medico =$_POST['nome_medico'];
    $telefone_medico = $_POST['telefone_medico'];
    $especialidade = $_POST['especialidade'];


    //UPDATE nometabela SET campo=valor, outrocampo=outrovalor WHERE campo=valor
    $comandosql = "Update medico set crm='$crm', nome_medico = '$nome_medico',
    telefone_medico='$telefone_medico', especialidade='$especialidade' where crm=$crm";

   if($conexao->query($comandosql)){
       echo 'Dados atualizados com sucesso!!!!';
   }

?>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>