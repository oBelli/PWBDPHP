<?php
 
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$dt_lanc = $_POST['dt_lanc'];
 
include 'conexao.php';
 
$insert_lan = "INSERT INTO tb_lancamentos VALUES
            (null, '$descricao', '$valor', '$tipo', '$dt_lanc', null, null)";
 
$test = $conexao->query($insert_lan);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>