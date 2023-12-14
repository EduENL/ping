<?php
$dbhost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_ping';


$conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}


// if($conexao->connect_errno)
// {
//     echo "Erro";
// }
// else
// {
//     echo "Conexão efetuada com sucesso";
// }
?>