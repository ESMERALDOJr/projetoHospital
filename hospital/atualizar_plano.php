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
    $nome_plano =$_POST['nome_plano'];
    $telefone_plano = $_POST['telefone_plano'];


    //UPDATE nometabela SET campo=valor, outrocampo=outrovalor WHERE campo=valor
    $comandosql = "Update planosaude set codigo='$codigo', nome_plano = '$nome_plano',
    telefone_plano='$telefone_plano' where codigo=$codigo";

   if($conexao->query($comandosql)){
       echo 'Dados atualizados com sucesso!!!!';
   }

?>
<a href="index.html" class="btn btn-primary" role="button" data-bs-toggle="button">Home</a>