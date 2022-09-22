<?php

    // print_r($_REQUEST);

if(isset($_POST['submit']) 
&& !empty($_POST['bd']) 
&& !empty($_POST['bd']))
{
    include_once('config.php');
    $email = $_POST['bd'];
    $senha = $_POST['bd'];

    print_r('Email: ' . $email);
    print_r('Senha: ' . $senha);
}else{
    header('Location: index.html');
}

?>