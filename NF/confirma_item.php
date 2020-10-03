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
    <title></title>
</head>
<body>
    <?php

    $nf = $_SESSION['nf'];
    
    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

    echo "<h1>NF: ".$nf . "</h1><br><hr>";
    $total = 0;
    foreach ($conexao -> query($consulta) as $linha) {

        echo "Cod Produto: ".$linha['cod_produto'] ."<br>";
        echo "Qtde: ".$linha['qtde'] ."<br>";
        echo "Subtotal: ".$linha['subtotal'] ."<br>";
        $total = $total + $linha['subtotal'];
        echo "<hr>";
    }

    echo "<b>TOTAL DA NOTA R$ ".$total."</b><hr>";
    ?>

    <p>O QUE DESEJA FAZER EM NOSSA LOJA?</p>
    <p><a href="seleciona_ultima_nf.php">COMPRAR MAIS?</a></p>
    <p><a href="finalizar.php?total=<?php echo $total; ?>">FINALIZAR O PEDIDO</a>   </p>   
    

</body>
</html>