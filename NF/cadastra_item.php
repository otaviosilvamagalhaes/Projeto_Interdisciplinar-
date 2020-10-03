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

<!DOCTYPE <html>
<head>
<html>
    <title></title>
</head>
<body>

    <form action="cadastra_produto.php" method="post">
        
        Nome: <input type="text" name="nome">
        <br>

        Valor: <input type="number" name="preco">
        <br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>