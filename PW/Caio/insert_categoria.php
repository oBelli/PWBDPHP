<?php
 
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
 
include 'conexao.php';
 
$insert_cat = "INSERT INTO tb_categoria VALUES
            (null, '$nome', '$descricao')";
 
$test = $conexao->query($insert_cat);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>