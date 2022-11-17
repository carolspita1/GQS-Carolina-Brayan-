<?php

include_once('config.php');

if(isset($_POST)['update']){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', endereco='$endereco', data_nascimento='$data_nascimento', cidade='$cidade', estado='$estado', bairro='$bairro'
    WHERE id='$id'"
    $result = $conexao->query($sqlInsert);
    print_r($result);
}
 header('Location: indexCadastro.php');
?>