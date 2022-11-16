<?php

include_once('config.php');

if(isset($_POST)['update']){
    
    $nome = $user_data['nome'];
    $email = $user_data['email'];
    $endereco = $user_data['endereco'];
    $data_nascimento = $user_data['data_nascimento'];
    $cidade = $user_data['cidade'];
    $estado = $user_data['estado'];
    $bairro = $user_data['bairro'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', endereco='$endereco', data_nascimento='$data_nascimento', cidade='$cidade', estado='$estado', bairro='$bairro'
    WHERE id='$id'"
}

?>