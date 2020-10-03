<?php
    session_start();
    if(
        (!isset($_SESSION['id'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)&&
        (!isset($_SESSION['nivel'])==true)){
        
        header('Location: ../Jooj_Games_Login');
    }
?>

<!DOCTYPE html>
<html> 
<head>
    <title>Jooj Games</title>
</head>
<body>
    <h1>INICIA UMA NOVA VENDA</h1>

    <form action="data_nf.php" method="post">

        <hr>
        <input type="submit" value="INICIAR VENDA">
    </form>

    <h1>OUTRAS OPÇÕES</h1>
    <p><a href="ver_nf.php">VER NOTAS EMITIDAS</a></p>
    <p><a href="ver_produto.php">VER PRODUTOS</a></p>
    <p><a href="cadastra_item.php">CADASTRAR PRODUTOS</a></p>

</body>
</html>