<?php
 
$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_empresa";
 
$conexao = new mysqli($server, $user, $password, $database);
 
if ($conexao->connect_error)
{
    die ('Falhou a conexão'. $conexao->connect_error);
} else {
    echo 'Conexão feita com sucesso';
};
 
?>