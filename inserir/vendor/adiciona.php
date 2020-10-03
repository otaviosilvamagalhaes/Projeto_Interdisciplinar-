<?php

    include '../NF/conecta.php';
    
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];


    $consulta = $conexao -> prepare("INSERT INTO produtos (nome,preco) VALUES ('$nome','$preco')");

    $consulta -> execute();

    header('Location: ../produtos/main.php');

?>