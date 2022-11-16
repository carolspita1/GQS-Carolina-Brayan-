<?php 
    $dbHost = 'localhost';
    $dbUsername = 'aluno';
    $dbPassword = 'aluno';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName);

    // echo($dbUsername);
    // if($conexao->connect_errno)
    // {
    //         echo "Erro";
    // }else{
    //     echo "Conexão efetuada com sucesso";
    // }

?>