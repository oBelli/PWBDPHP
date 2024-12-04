<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caio</title>
    <link rel="stylesheet" href="cssMenu.css">
</head>
<body>
    <div class="sidebar">
        <center>
            <img src="logo.png" alt="logo" class="logo">
            
            <?php 
                session_start();
                if (isset($_SESSION['nm_funcionario'])){
                    $nome = $_SESSION['nm_funcionario'];
                    echo "<h2 style='font-size: 50px;
                    color: black;
                    position: absolute;
                    margin-top: 210%;
                    margin-left: 1%;
                    background-color: #ffffff;
                    width: 80%;
                    height: 15%;
                    border-radius: 10px;'> Olá $nome</h2>";
                } else {
                    echo "<script>alert('Você não está logado!'); history.back()</script>";
                }
            ?>
            <a href="cadCliente.html"><button>CLIENTE</button></a>
            <a href="cadFuncionario.html"><button>FUNCIONÁRIO</button></a>
            <a href="cadFornecedor.html"><button>FORNECEDOR</button></a>
            <a href="cadCategoria.html"><button>CATEGORIA</button></a>
            <a href="cadLancamento.html"><button>LANÇAMENTO</button></a>
            <a href="logout.php"><button>SAIR</button></a>
        </center>
    </div>
    <div class="content">
        <h2 class="welcome-text" style="margin-left: 40%;">Bem-vindo ao Sistema!</h2>
    </div>
</body>
</html>
