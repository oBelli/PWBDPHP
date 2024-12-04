<?php
    if (isset($_POST['id']) && isset($_POST['senha'])) {
        $id_user = $_POST['id'];
        $senha = $_POST['senha'];
 
    include 'conexao.php';
 
    $select = "SELECT * FROM tb_funcionario WHERE id_funcionario = $id_user";
    $query = $conexao->query($select);
    $resultado = $query->fetch_assoc();
 
    $id_user_banco = $resultado['id_funcionario'];
    $id_senha_banco = $resultado['senha'];
 
    if ($id_user == $id_user_banco && $senha == $id_senha_banco) {
        session_start();
        $_SESSION['nm_funcionario'] = $resultado['nm_funcionario'];
        header('location: Menu.php');
    }
    else{
        echo "<script> alert('Senha ou usuário incorretos'); history.back() </script>";
    }
};
?>


