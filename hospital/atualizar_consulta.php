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


    //UPDATE nometabela SET campo=valor, outrocampo=outrovalor WHERE campo=valor
    $comandosql = "Update consulta set crm='$crm', cpf = '$cpf',
    data_consulta='$data_consulta', hora_consulta='$hora_consulta' where crm=$crm";

   if($conexao->query($comandosql)){
       echo 'Dados atualizados com sucesso!!!!';
   }

?>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>