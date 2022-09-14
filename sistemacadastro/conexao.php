<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'aluno');
define('SENHA', 'aluno');
define('DB', 'login');

$conexao = new PDO( 'mysql:host=' . HOST . ';dbname=' . DB, USUARIO, SENHA );
?>