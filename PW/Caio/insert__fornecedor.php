<?php
 
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
 
include 'conexao.php';
 
$insert_for = "INSERT INTO tb_fornecedor VALUES
            (null, '$nome', '$contato', '$email', '$telefone', '$endereco')";
 
$test = $conexao->query($insert_for);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>