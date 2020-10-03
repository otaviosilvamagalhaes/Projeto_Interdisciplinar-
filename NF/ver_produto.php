<?php
    include 'conecta.php';

    $consulta = "SELECT * FROM produtos";

    foreach ($conexao -> query ($consulta) as $linha) {
        echo "ID: ".$linha['id'] ."<br>";
        echo "Nome: ".$linha['nome'] ."<br>";
        echo "Preço R$ : ".$linha['preco'] ."<br>";

        echo "<hr>";
    } 
    echo "<br>";
?>
<p><a href="../cadastro/main.php">VOLTAR INICIO</a></p>