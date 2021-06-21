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

    $conexao->select_db("phospital");//escolher o banco de dados que vai executar o comando
    //criar a definição das tabelas
    $plano_saude = "CREATE TABLE planosaude (
        codigo bigint(20) NOT NULL,
        nome_plano varchar(50) NOT NULL,
        telefone_plano varchar(15) NOT NULL,
        PRIMARY KEY (codigo)
    )";  
    $medico = "CREATE TABLE medico (
        crm bigint(20) NOT NULL,
        nome_medico varchar(80) NOT NULL,
        telefone_medico varchar(15) NOT NULL,
        especialidade varchar(80) NOT NULL,
        PRIMARY KEY (crm)
    )";
    $paciente = "CREATE TABLE paciente (
        cpf bigint(20) NOT NULL,
        nome_paciente varchar(250) NOT NULL,
        endereco varchar(250) NOT NULL,
        data_nascimento varchar(15) NOT NULL,
        telefone_paciente varchar(15) NOT NULL,
        codigo bigint(20) NOT NULL,
        PRIMARY KEY (cpf),
        FOREIGN KEY (codigo) REFERENCES planoSaude(codigo)
    )";
    $consulta = "CREATE TABLE consulta (
        crm bigint(20) NOT NULL,
        cpf bigint(15) NOT NULL,
        data_consulta varchar(15) NOT NULL,
        hora_consulta varchar(15) NOT NULL,
        FOREIGN KEY (crm) REFERENCES medico(crm),
        FOREIGN KEY (cpf) REFERENCES paciente(cpf)
    )";
    
    $conexao->query($plano_saude);
    $conexao->query($medico);
    $conexao->query($paciente);
    $conexao->query($consulta);
?>