<?php

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['nome'] && !empty($_POST['senha']))){

        //Acessa
        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // print_r('Nome: '.$nome);
        // print_r('<br>');
        // print_r('Senha: '.$senha);
       

        $sql = "SELECT * FROM login WHERE nome = '$nome' and senha = '$senha'";
        $result = $conexao->query($sql);

        // print_r($result);
        // print_r($sql);

        if(mysqli_num_rows($result) < 1){
            header('Location: index2.php');
        }else{
            
            header('Location: indexCadastro.php');
        }

    }   
    else{
        header('Location: index2.php');
    }





    // if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
// {
//     include_once('config2.php');
//     $nome = $_POST['nome'];
//     $senha = $_POST['senha'];

//     print_r('Email: ' . $nome);
//     print_r('Senha: ' . $senha);
// }else{
//     header('Location: index.php');
// }

?>