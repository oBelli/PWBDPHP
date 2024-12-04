<?php
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
 
include 'conexao.php';
 
$insert_cli = "INSERT INTO tb_cliente VALUES
            (null, '$nome', '$sobrenome', '$email', '$telefone', '$endereco')";
 
$test = $conexao->query($insert_cli);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>