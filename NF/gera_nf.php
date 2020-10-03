<?php
    include 'conecta.php';
    $data_atual = $_POST['data'];
    //echo "$data_atual";
    $consulta = $conexao -> prepare("
        INSERT INTO nota_fiscal (data)
        VALUES ('$data_atual')
        ");
    $consulta -> execute();
    //Agora precisamos adicionar os itens de produtos
    //na nota fiscal
    //Precisamos recuperar qual o número da nota fiscal
    //que foi gerada nesta ação.
    header('Location: seleciona_ultima_nf.php');
?>