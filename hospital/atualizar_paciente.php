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


    //UPDATE nometabela SET campo=valor, outrocampo=outrovalor WHERE campo=valor
    $comandosql = "Update paciente set cpf='$cpf', nome_paciente = '$nome_paciente', endereco = '$endereco', data_nascimento = '$data_nascimento',
    telefone_paciente='$telefone_paciente', codigo='$codigo' where cpf=$cpf";

   if($conexao->query($comandosql)){
       echo 'Dados atualizados com sucesso!!!!';
   }

?>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>