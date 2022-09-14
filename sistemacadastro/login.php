<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = htmlentities($_POST['usuario']);
$senha = htmlentities($_POST['senha']);
//$usuario = mysql_real_escape_string($conexao, $_POST['usuario']);
//$senha = mysql_real_escape_string($conexao, $_POST['senha']);

//$SQL = "select usuario_id, usuario from usuario where usuario = '$usuario' and senha = md5('$senha')";
$SQL = "select usuario_id, usuario from usuario where usuario = '$usuario'";
$result = $conexao->query( $SQL );
// Imprimindo resultados em HTML
echo "<table>\n";
$rows = $result->fetchAll();
while ($rows) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
}
echo "</table>\n";

