<?php
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dt_nasc = $_POST['dt_nasc'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$dt_adm = $_POST['dt_adm'];
$senha = $_POST['senha'];
 
include 'conexao.php';
 
$insert_fun = "INSERT INTO tb_funcionario VALUES
            (null, '$nome', '$sobrenome', '$dt_nasc', '$cargo', '$salario', '$dt_adm', '$senha')";
 
$test = $conexao->query($insert_fun);
 
if($test){
   echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>