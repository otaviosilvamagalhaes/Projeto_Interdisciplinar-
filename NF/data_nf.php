<?php
    session_start();
    if(
        (!isset($_SESSION['id'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)&&
        (!isset($_SESSION['nivel'])==true)){
        
        header('Location: ../Jooj_Games_Login');
    }
    include 'conecta.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA NOTA FISCAL</title>
</head>
<body>
    <form action="gera_nf.php" method="post">
    <p>INSIRA A DATA DA VENDA</p>
    DATA: <input type="date" name="data">
    <hr>
    <input type="submit" value="CONTINUAR">
    </form>
</body>
</html>